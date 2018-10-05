<section class="row">
    <div class="col-md-3">
        <section class="card">
            <div class="card-header">
                <span class="cat__core__title">
                    <span><i class="icmn-equalizer"></i></span> <strong>Filters</strong>
                </span>
            </div>
            <div class="card-block">
                <div class="form-group ">
                     <span><i class="icmn-pushpin"></i></span> <label class="form-label" >By Jobs</label>
                    <select class="form-control"  id="vacancy_id">
                        <option value="">All Active Jobs</option>
                        {list_job_vacany}
                    </select>
                </div>
                <div class="form-group ">
                     <span><i class="icmn-user"></i></span> <label class="form-label" >By Applicant</label>
                    <select class="form-control select2"  id="applicant_id" disabled="true">
                        <option value="">Find Applicant By Name</option>

                    </select>
                </div>
                <div class="form-group ">
                     <span><i class="icmn-menu"></i></span> <label class="form-label" >By Activity</label>
                    <select class="form-control select2"  id="activity_id">
                        <option value="">All Active Jobs</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="card-header">
                <span class="cat__core__title">
                    <span><i class="icmn-calendar"></i></span> <strong>List Agenda</strong>
                </span>
            </div>
            <div class="card-block">
            </div>
        </section>
    </div>
    <div class="col-md-9">
        <section class="card">
            <div class="card-header">
                <span class="cat__core__title">
                    <strong>Agenda</strong>
                </span>
            </div>
            <div class="card-block">
                <div class="example-calendar-block"></div>
            </div>
        </section>
    </div>
</section>

<script>

    $(function() {
        $(".select2").select2();

        $('#vacancy_id').select2({
            sorter: function(data) {
                /* Sort data using lowercase comparison */
                return data.sort(function (a, b) {
                    a = a.text.toLowerCase();
                    b = b.text.toLowerCase();
                    if (a > b) {
                        return 1;
                    } else if (a < b) {
                        return -1;
                    }
                    return 0;
                });
            }
        });
        $('#applicant_id').select2({
            sorter: function(data) {
                /* Sort data using lowercase comparison */
                return data.sort(function (a, b) {
                    a = a.text.toLowerCase();
                    b = b.text.toLowerCase();
                    if (a > b) {
                        return 1;
                    } else if (a < b) {
                        return -1;
                    }
                    return 0;
                });
            }
        });

        $("#vacancy_id").change(function(event) {
            $("#applicant_id").val("").trigger("change");
            if($("#vacancy_id").val()!=""){
                $("#applicant_id").removeAttr('disabled');
            }else{
                $("#applicant_id").attr('disabled', 'true');
            }
        });

        $('#applicant_id').select2({
                placeholder: 'Select Applicant',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_applicants",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "vw_hiring_step",
                            vacancy_id : $("#vacancy_id").val()
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });


        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 800,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            defaultDate: $('.example-calendar-block').fullCalendar('today'),
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            events: [
                // {
                //     title: 'All Day Event',
                //     start: '2016-05-01',
                //     className: 'fc-event-success'
                // },
                // {
                //     title: 'Long Event',
                //     start: '2016-05-07',
                //     end: '2016-05-10'
                // },
                // {
                //     id: 999,
                //     title: 'Repeating Event',
                //     start: '2016-05-09T16:00:00',
                //     className: 'fc-event-default'
                // },
                // {
                //     id: 999,
                //     title: 'Repeating Event',
                //     start: '2016-05-16T16:00:00',
                //     className: 'fc-event-success'
                // },
                // {
                //     title: 'Conference',
                //     start: '2016-05-11',
                //     end: '2016-05-13',
                //     className: 'fc-event-danger'
                // },
                // {
                //     title: 'Meeting',
                //     start: '2016-05-12T10:30:00',
                //     end: '2016-05-12T12:30:00',
                //     className: 'fc-event-default'
                // },
                // {
                //     title: 'Lunch',
                //     start: '2016-05-12T12:00:00',
                //     className: 'fc-event-default'
                // },
                // {
                //     title: 'Meeting',
                //     start: '2016-05-12T14:30:00',
                //     className: 'fc-event-info'
                // },
                // {
                //     title: 'Happy Hour',
                //     start: '2016-05-12T17:30:00'
                // },
                // {
                //     title: 'Dinner',
                //     start: '2016-05-12T20:00:00'
                // },
                // {
                //     title: 'Birthday Party',
                //     start: '2016-05-13T07:00:00',
                //     className: 'fc-event-danger'
                // },
                // {
                //     title: 'Click for Google',
                //     url: 'javascript: alert("Clicked: External URL");',
                //     start: '2016-05-28',
                //     className: 'fc-event-warning'
                // }
            ],
            // events: function(start, end, timezone, callback) {
            //     $.ajax({
            //       url: 'myxmlfeed.php',
            //       dataType: 'xml',
            //       data: {
            //         // our hypothetical feed requires UNIX timestamps
            //         start: start.unix(),
            //         end: end.unix()
            //       },
            //       success: function(doc) {
            //         var events = [];
            //         $(doc).find('event').each(function() {
            //           events.push({
            //             title: $(this).attr('title'),
            //             start: $(this).attr('start') // will be parsed
            //           });
            //         });
            //         callback(events);
            //       }
            //     });
            //   }
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            }
        });

    });

</script>