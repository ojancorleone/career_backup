<!-- Begin Plugins Ratting Star  -->
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bars-1to10.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bars-movie.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bars-square.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bars-pill.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bars-reversed.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bars-horizontal.css">

<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/fontawesome-stars.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/css-stars.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/bootstrap-stars.css">
<link rel="stylesheet" href="{base}assets/backend/vendors/rating-star/themes/fontawesome-stars-o.css">
<script src="{base}assets/backend/vendors/rating-star/jquery.barrating.js"></script>

<style type="text/css">
    .borderless td, .borderless th {
    border: none;
}

.label-strong{
    font-weight: bold;
    font-size: 17px;
}
.strong{
    font-weight: bold;
}

.icmn-pencil{
   color:#0190fe; 
}

hr{
    height:2px;border-width:0;background-color:#0190fe;
}

.multiple{
    height:2px;border-width:0;background-color:#798993;
}

tr > td {
  margin-bottom: 10px;
}
.cv-box {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px;
    }
</style>

<section class="card">
   
    <div class="card-block" id="cv">
        <div class="mb-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                     <a class="cat__core__avatar cat__core__avatar--90 cat__core__avatar--border-white d-block mx-auto" href="javascript:void(0);">
                        <img src="{base}assets/backend/images/profile/applicant/{email}/{foto}" alt="Alternative text to the image">
                    </a>
                    <h4 class="text-black mb-3">
                        <strong>{fullname}</strong>
                        <!-- <button id="download-cv" class="btn btn-xs btn-primary ">Generate PDF</button> -->
                    </h4>
                    <address>
                        <abbr>{email}</abbr>
                        <br />
                        <abbr>{no_ktp} -</abbr> {gaji_diharapkan} /month 
                        <br/>
                    </address>
                </div>
                <div class="col-md-2 text-righ action-edit">
                    <a href="{base}main#{parent_page}" class="btn btn-rounded btn-outline-primary mr-2 mb-2"><i class="icmn-pencil" style=""></i> Edit Profile</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 cv-box">
                    <div class="table-responsive">
                        <table class="table borderless text-right">
                            <tbody>
                                <tr>
                                    <td class="text-left label-strong" colspan="4">About Me</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=self_description"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                <tr>
                                    <td class="text-left" colspan="5">{profil_diri} <hr></td>
                                </tr>
                                <tr>
                                    <td class="text-left label-strong" colspan="4">Personal Informations</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=personal_information"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td class="text-left strong"> ID Number National </td>
                                    <td class="text-left"><abbr title="ID Number National">{no_ktp}</abbr></td>
                                    <td class="text-left strong">Phone</td>
                                    <td class="text-left"><abbr title="Phone">{phone}</abbr></td>
                                </tr>
                                <tr>
                                    <td class="text-left strong">Email</td>
                                    <td class="text-left"><abbr title="Email">{email}</abbr></td>
                                    <td class="text-left strong">Religion</td>
                                    <td class="text-left"><abbr title="Religion">{agama}</abbr></td>
                                </tr>                            
                                <tr>
                                    <td class="text-left strong">Date of Birth</td>
                                    <td class="text-left"><abbr title="Date of Birth">{tgl_lahir}</abbr></td>
                                    <td class="text-left strong">Address</td>
                                    <td class="text-left"><abbr title="Address">{alamat_domisili}</abbr></td>
                                </tr>
                                <tr>
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr class="list_skill">
                                    <td class="text-left label-strong" colspan="4">Skill</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=skill"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                {list_skill}
                                    <tr>
                                        <td class="text-left" colspan="2">{name}</td>
                                        <td class="text-left" id="list_skill_{id}" style="pointer-events: none;" colspan="2"> 
                                            <select class="rating" id="rating_{id}" disabled="true" style="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <script type="text/javascript">
                                            $(function() {
                                                var rating = '{rating}';
                                                var id = '{id}';
                                                $("#rating_"+id).val(rating);
                                                $("#rating_"+id).barrating({
                                                    theme: 'fontawesome-stars',
                                                    showSelectedRating: false
                                                });
                                            });
                                        </script>
                                        <td class="text-left">{skill_years}</td>
                                    </tr>
                                {/list_skill}
                                <tr class="list_skill">
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr class="list_work">
                                    <td class="text-left label-strong" colspan="4">Working History</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=experience"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                {list_work}
                                    <tr>
                                        <td class="text-left strong">Company Name</td>
                                        <td class="text-left"><abbr title="Company Name">{nama_perusahaan}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Position</td>
                                        <td class="text-left"><abbr title="Position">{jabatan}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Work Experience</td>
                                        <td class="text-left">{date_start}</td>
                                        <td class="text-left strong">TO</td>
                                        <td class="text-left">
                                            {if '{current_date}' == '1' }
                                                Now
                                            {else}
                                                {date_end}
                                            {/if}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Location</td>
                                        <td class="text-left"><abbr title="Location">{alamat_perusahaan}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Decription</td>
                                        <td class="text-left"><abbr title="Decription">{deskripsi_pekerjaan}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="5"> <hr class="multiple" width="90%"></td>
                                    </tr>
                                {/list_work}
                                <tr class="list_work">
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr class="list_education">
                                    <td class="text-left label-strong" colspan="4">Education</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=education"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                {list_education}
                                    <tr>
                                        <td class="text-left strong">School/University</td>
                                        <td class="text-left"><abbr title="School/University">{nama_jenjang_pendidikan}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Major</td>
                                        <td class="text-left">{jurusan}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">From</td>
                                        <td class="text-left">{tahun_mulai}</td>
                                        <td class="text-left strong">TO</td>
                                        <td class="text-left">{tahun_selesai}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">GPA</td>
                                        <td class="text-left"><abbr title="GPA">{score_gpa}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="5"> <hr class="multiple" width="90%"></td>
                                    </tr>
                                {/list_education}
                                <tr class="list_education">
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr class="list_organisasi">
                                    <td class="text-left label-strong" colspan="4">Organizational Experience</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=organizational_experience"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                {list_organisasi}
                                    <tr>
                                        <td class="text-left strong" colspan="2">Organizational Name</td>
                                        <td class="text-left"><abbr title="Organizational Name">{nama_organisasi}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong" colspan="2">Position</td>
                                        <td class="text-left"><abbr title="Position">{jabatan}</td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong" colspan="2">Duration</td>
                                        <td class="text-left"><abbr title="Duration">{lama_menjabat}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="5"> <hr class="multiple" width="90%"></td>
                                    </tr>
                                {/list_organisasi}
                                <tr class="list_organisasi">
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr class="list_family">
                                    <td class="text-left label-strong" colspan="4">Family</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=family_relationship"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                <tr>
                                    <td class="text-left" colspan="5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-right">
                                                <thead>
                                                <tr>
                                                    <th>Status Family</th>
                                                    <th class="text-left">Name</th>
                                                    <th class="text-left">Last Education</th>
                                                    <th class="text-left">Position</th>
                                                    <th class="text-left">Company Name</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    {list_keluarga}
                                                        <tr>
                                                            <td class="text-left">{status_keluarga}</td>
                                                            <td class="text-left">{nama}</td>
                                                            <td class="text-left">{pendidikan_terakhir}</td>
                                                            <td class="text-left">{jabatan_pekerjaan}</td>
                                                            <td class="text-left">
                                                                {if '{perusahaan}' == '' }
                                                                    -
                                                                {else}
                                                                    {perusahaan}
                                                                {/if}
                                                            </td>
                                                        </tr>
                                                    {/list_keluarga}
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="list_family">
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr class="list_prestasi">
                                    <td class="text-left label-strong" colspan="4">Achievements</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=achievement"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                {list_prestasi}
                                    <tr>
                                        <td class="text-left strong">Award Name</td>
                                        <td class="text-left"><abbr title="Award Name">{award_name}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Award Year</td>
                                        <td class="text-left"><abbr title="Award Year">{year}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Skala</td>
                                        <td class="text-left"><abbr title="Skala">{level_scope}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left strong">Category</td>
                                        <td class="text-left"><abbr title="Category">{stream_name}</abbr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="5"> <hr class="multiple" width="90%"></td>
                                    </tr>
                                {/list_prestasi}
                               
                                <tr class="list_prestasi">
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <td class="text-left label-strong" colspan="4">Others</td>
                                    <td class="action-edit"> <a href="{base}main#{parent_page}?detail=others"><i class="icmn-pencil"></i></a> </td>
                                </tr>
                                <tr>
                                    <td class="text-left strong">Overtime</td>
                                    <td class="text-left"><abbr title="Notice Periode">{lembur}</abbr></td>
                                    <td class="text-left strong">Task Outside the City</td>
                                    <td class="text-left"><abbr title="Notice Periode">{tugas_luar_kota}</abbr></td>
                                </tr>
                                <tr>
                                    <td class="text-left strong">Notice Periode</td>
                                    <td class="text-left"><abbr title="Notice Periode">{mulai_bekerja}</abbr></td>
                                    <td class="text-left strong">Placed Outside the City</td>
                                    <td class="text-left"><abbr title="Notice Periode">{ditempatkan_luar_kota}</abbr></td>
                                </tr>
                                <tr>
                                    <td class="text-left strong">Expected Salary</td>
                                    <td class="text-left"><abbr title="Expected Salary">{gaji_diharapkan}</abbr></td>
                                    <td class="text-left strong">Other Compensation</td>
                                    <td class="text-left"><abbr title="Other Compensation">{fasilitas}</abbr></td>
                                </tr>
                                
                                <tr>
                                    <td class="text-left" colspan="5"><hr></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
            var userlevel = '{userlevel}';

            if ( userlevel == 'sso' ) {
                $(".action-edit").remove();
            }

        var doc = new jsPDF();
        $('#download-cv').click(function () {   
            var doc = new jsPDF();

            // We'll make our own renderer to skip this editor
            var specialElementHandlers = {
                '#cv': function(element, renderer){
                    return true;
                }
            };

            // All units are in the set measurement for the document
            // This can be changed to "pt" (points), "mm" (Default), "cm", "in"
            doc.fromHTML($('#cv').get(0), 15, 15, {
                'width': 170, 
                'elementHandlers': specialElementHandlers
            });

            setTimeout(function(){
                doc.save('sample-file.pdf');
            },10000);
        });
    });

        $(function() {
            var check_skill       = "{check_skill}";
            var check_work        = "{check_work}";
            var check_education   = "{check_education}";
            var check_organisasi  = "{check_organisasi}";
            var check_family      = "{check_family}";
            var check_prestasi    = "{check_prestasi}";

            check_skill=="0"?$(".list_skill").hide():$(".list_skill").show();
            check_work=="0"?$(".list_work").hide():$(".list_work").show();
            check_education=="0"?$(".list_education").hide():$(".list_education").show();
            check_organisasi=="0"?$(".list_organisasi").hide():$(".list_organisasi").show();
            check_family =="0"?$(".list_family").hide():$(".list_family").show();
            check_prestasi =="0"?$(".list_prestasi ").hide():$(".list_prestasi ").show();
        });
</script>