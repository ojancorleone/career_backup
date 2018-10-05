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
<!-- End Plugins Ratting Star  -->
<style type="text/css">
	.content-detail , .content-detail-experience, .content-detail-organizational_experience, .content-detail-family_relationship, .content-detail-achievement, .content-detail-skill {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px;
	}


    .note {
        font-size: 11px;
        text-align: justify;
        font-style: italic;
        color: #898989;
    }
</style>

<section class="card">
    <div class="card-header" >
        <span class="cat__core__title text-left">
            <strong>Curiculum Vitae</strong>
            <a href='main#{page_content}/preview' id=$id class='btn btn-sm btn-rounded btn-outline-primary mr-2 mb-2 pull-right' data-toggle='tooltip' title='Add' aria-expanded='false'>
               Preview CV
            </a>
        </span>
    </div>
    <div class="card-block">
		<div class="row">
			<div class="col-md-2">
                <div class="cat__core__widget cat__core__widget__1 bg-default text-white px-3 py-5" style="padding-bottom: 9rem!important;background-image: url('{base}assets/backend/modules/dummy-assets/common/img/photos/5.jpeg');">
                    <a class="cat__core__avatar cat__core__avatar--90 cat__core__avatar--border-white d-block mx-auto" href="javascript:void(0);">
                        <img src="{base}assets/backend/images/profile/applicant/{email}/{foto}" alt="Alternative text to the image">
                    </a>
                    <div class="my-3 text-center">
                        <strong class="font-size-18">{fullname}</strong>
                        <strong class="font-size-12">{email}</strong>
                        <br />
                    </div>
                    <div class="text-center">
                        <div class="btn-group text-center">
                            <button type="button" class="btn btn-rounded btn-primary mr-2 mb-2">Download CV</button>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-md-10" style="">
			    <div class="mb-5">
			        <div class="nav-tabs-vertical" style="">
			            <ul class="nav nav-tabs" role="tablist">
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail active" href="javascript: void(0);" data-toggle="tab" data-target="#personal_information" role="tab"><i class="lnr lnr-home "></i> Personal Information</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#education" role="tab"><i class="lnr lnr-graduation-hat"></i> Education</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#experience" role="tab">
			                    	<i class="lnr lnr-briefcase"></i> Experience</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#organizational_experience" role="tab"><i class="lnr lnr-users"></i> Organizational Experience</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#family_relationship" role="tab">
			                    	<i class="lnr lnr-users"></i> Family Relationship</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#self_description" role="tab"><i class="lnr lnr-rocket"></i> Self Description </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#skill" role="tab"><i class="lnr lnr-code"></i> Skill </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#achievement" role="tab"><i class="lnr lnr-license"></i> Achievement </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#others" role="tab"><i class="lnr lnr-list"></i> Others </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#other_documents" role="tab"><i class="lnr lnr-paperclip"></i> Other Documents</a>
			                </li>
			            </ul>
			            <div class="tab-content">
			                <div class="tab-pane active" id="personal_information" role="tabcard" style=" ">
			                    <div class="row content-detail">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <form id="form-personal-information" name="form-personal-information" action="#">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <h5 class="text-black"><strong>Personal Information</strong></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>KTP: </label>
                                                            <input type="text" name="no_ktp" id="no_ktp" placeholder="KTP" class="form-control" data-validation="[NOTEMPTY]" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Full Name: </label>
                                                            <input type="text" name="fullname" id="fullname" placeholder="Fullname" class="form-control" data-validation="[NOTEMPTY]" >
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nick Name: </label>
                                                            <input type="text" name="nama_panggilan" id="nama_panggilan" placeholder="Fullname" class="form-control"  data-validation="[NOTEMPTY]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email: </label>
                                                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" data-validation="[EMAIL]">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone: </label>
                                                            <input type="text" name="phone" id="phone" placeholder="Phone Number" class="form-control" data-validation="[NOTEMPTY]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label>Gender: </label>
                                                            <select class="form-control select2" name="jenis_kelamin" id="jenis_kelamin" data-validation='[NOTEMPTY]'>
                                                                <option value="">Please Choose</option>
                                                                {list_jenis_kelamin}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label>Kewarganegaraan: </label>
                                                           <select class="form-control select2" name="kewarganegaraan" id="kewarganegaraan" data-validation='[NOTEMPTY]'>
                                                                <option value="">Please Choose</option>
                                                                <option value="WNI">WNI</option>
                                                                <option value="WNA">WNA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address: </label>
                                                            <textarea type="text" name="alamat_ktp" id="alamat_ktp" placeholder="Address" class="form-control" data-validation="[NOTEMPTY]"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label>Zip Code: </label>
                                                            <input type="text" name="kode_pos" id="kode_pos" placeholder="zipcode" class="form-control"  data-validation="[NOTEMPTY]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label>Religion: </label>
                                                           <select class="form-control select2" name="agama" id="agama" data-validation=''>
                                                                <option value="">Please Choose</option>
                                                                {list_agama}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label>Martial Status: </label>
                                                           <select class="form-control select2" name="status_menikah" id="status_menikah" data-validation='[NOTEMPTY]'>
                                                                <option value="">Please Choose</option>
                                                                {list_status_menikah}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Domisili Address: </label>
                                                            <textarea type="text" name="alamat_domisili" id="alamat_domisili" placeholder="Domisili Address" class="form-control" data-validation="[NOTEMPTY]"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label>Place Of Birth: </label>
                                                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Place Of Birth" class="form-control" data-validation="[NOTEMPTY]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Birth Of Date: </label>
                                                            <input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="Birth Of Date" class="form-control datetimepicker11" data-validation="[NOTEMPTY]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>NPWP: </label>
                                                            <input type="text" name="no_npwp" id="no_npwp" placeholder="NPWP" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>No BPJS / Jamsostek: </label>
                                                            <input type="text" name="no_jamsostek" id="no_jamsostek" placeholder="No BPJS" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>No SIM A: </label>
                                                            <input type="text" name="no_sima" id="no_sima" placeholder="No SIM A" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>No SIM C: </label>
                                                            <input type="text" name="no_simc" id="no_simc" placeholder="No SIM C" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <h6 class="text-black"><strong>Social Media</strong></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Skype ID: </label>
                                                            <input type="text" name="skype_id" id="skype_id" placeholder="Skype" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Linkedin: </label>
                                                            <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Facebook: </label>
                                                            <input type="text" name="facebook" id="facebook" placeholder="Facebook" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Twitter: </label>
                                                            <input type="text" name="twitter" id="twitter" placeholder="Twitter" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Instagram: </label>
                                                            <input type="text" name="instagram" id="instagram" placeholder="Instagram" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Github: </label>
                                                            <input type="text" name="github" id="github" placeholder="github" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn btn-info pull-right continue">
                                                    <i class='fa fa-save'></i> Save
                                                </button>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="tab-pane" id="education" role="tabcard">
                                <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 9px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Education</strong></h5>
                                                </div>
                                            </div>
                                            <form id="form-education" name="form-education" action="#" class="">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-education">
                                                    
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" id="add-education" style="margin-top: 20px;">
                                                            <span class='fa fa-plus'> </span> Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                        	<i class='fa fa-save'></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			                <div class="tab-pane" id="experience" role="tabcard">
			                   <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 9px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Experience</strong></h5>
                                                </div>
                                            </div>

                                            <form id="form-experience" name="form-experience" action="#" class="">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-experience">
                                                    
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" id="add-experience" style="margin-top: 20px;">
                                                            <span class='fa fa-plus'> </span> Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                            <i class='fa fa-save'></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			                <div class="tab-pane" id="organizational_experience" role="tabcard">
			                   <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 15px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Organizational Experience</strong></h5>
                                                </div>
                                            </div>
                                            <form id="form-organizational_experience" name="form-organizational_experience" action="#" class="">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-organizational_experience">
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" id="add-organizational_experience" style="margin-top: 20px;">
                                                            <span class='fa fa-plus'> </span> Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                            <i class='fa fa-save'></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="family_relationship" role="tabcard">
                               <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 15px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Family Relationship</strong></h5>
                                                </div>
                                            </div>
                                            <form id="form-family_relationship" name="form-family_relationship" action="#" class="">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-family_relationship">
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" id="add-family_relationship" style="margin-top: 20px;">
                                                            <span class='fa fa-plus'> </span> Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                            <i class='fa fa-save'></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			                <div class="tab-pane" id="self_description" role="tabcard">
			                   <div class="row content-detail">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <form id="form-self_description" name="form-self_description" action="#">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <h5 class="text-black"><strong>Self Descriptions</strong></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Self Profile: </label>
                                                            <textarea name="profil_diri" id="profil_diri" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Tulis profil diri Kamu dengan singkat & padat. Berisikan antara lain nilai/value yang Kamu miliki, visi bekerja Kamu, kunci sukses Kamu & lain-lain yang nantinya akan Kamu berikan ke perusahaan untuk menunjang keberhasilan Kamu di perusahaan baru.
                                                            <!-- Write your profile in brief & solid. Contains among others the values ​​/ values ​​you have, your working vision, the key to your success & others that you will later give to the company to support your success in a new company. -->
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Professional Ability Qualifications: </label>
                                                            <textarea name="kualifikasi" id="kualifikasi" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Sebutkan kemampuan profesional yang dimiliki termasuk sertifikat atau akreditasi yang Kamu miliki.
                                                           <!--  Mention your professional abilities including the certificate or accreditation you have. -->
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>The skills you have: </label>
                                                            <textarea name="keterampilan" id="keterampilan" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Sebutkan ketrampilan yang Kamu miliki & kuasai yang menunjang keberhasilan tugas Kamu.
                                                            <!-- Mention the skills you have and master that support the success of your task. -->
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Leisure Activities: </label>
                                                            <textarea name="kegiatan" id="kegiatan" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Sebutkan kegiatan / hobi yang Kamu lakukan di waktu luang terkait dengan pengembangan diri Kamu.
                                                           <!-- Mention the activities / hobbies that you do in your spare time related to your self-development.. -->
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <!-- <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Achievement: </label>
                                                            <textarea name="prestasi" id="prestasi" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Tulis semua penghargaan / prestasi yang pernah didapat yang terkait dengan perkembangan karir profesional Kamu.
                                                            Write down all the awards / achievements that have been obtained related to the development of your professional career.
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Publication: </label>
                                                            <textarea name="publikasi" id="publikasi" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Tulis berbagai karya yang sudah diterbitkan, misalnya makalah, buku, penelitian, seminar, pidato, & semua karya yang sudah dipublikasikan.
                                                            <!-- Write various works that have been published, such as papers, books, research, seminars, speeches, and all published works. -->
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Professional Member: </label>
                                                            <textarea name="anggota_profesional" id="anggota_profesional" placeholder="Write your answer here" class="form-control" data-validation="[NOTEMPTY]" ></textarea>
                                                        </div>
                                                        <p class="note">
                                                            Jika Kamu adalah salah satu anggota/ membership profesional atau anggota organisasi lainnya, tulis & sertakan jabatan yang tangani.
                                                            <!-- If you are one of the professional members / members of the organization or other members of the organization, write & include the positions that are handled. -->
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn btn-info pull-right continue">
                                                    <i class='fa fa-save'></i> Save
                                                </button>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			                <div class="tab-pane" id="skill" role="tabcard">
			                    <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 9px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Skills</strong></h5>
                                                </div>
                                            </div>
                                            <form id="form-skill" name="form-skill" action="#" class="">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-skill">
                                                    
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" id="add-skill" style="margin-top: 20px;">
                                                            <span class='fa fa-plus'> </span> Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                            <i class='fa fa-save'></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div> 
			                <div class="tab-pane" id="achievement" role="tabcard">
			                    <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 9px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Achievements</strong></h5>
                                                </div>
                                            </div>
                                            <form id="form-achievement" name="form-achievement" action="#" class="">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-achievement">
                                                    
                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" id="add-achievement" style="margin-top: 20px;">
                                                            <span class='fa fa-plus'> </span> Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                            <i class='fa fa-save'></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			                <div class="tab-pane" id="others" role="tabcard">
                               <div class="row content-detail">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <form id="form-others" name="form-others" action="#">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <h5 class="text-black"><strong>Others</strong></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Overtime: </label>
                                                            <select class="form-control select2" name="lembur" id="lembur" data-validation="[NOTEMPTY]">
                                                                <option value="">Please Choose</option>
                                                                <option value="1">Ready!</option>
                                                                <option value="2">Not Ready</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Task Outside the City: </label>
                                                            <select class="form-control select2" name="tugas_luar_kota" id="tugas_luar_kota" data-validation="[NOTEMPTY]">
                                                                <option value="">Please Choose</option>
                                                                <option value="1">Ready!</option>
                                                                <option value="2">Not Ready</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Placed Outside the City: </label>
                                                            <select class="form-control select2" name="ditempatkan_luar_kota" id="ditempatkan_luar_kota" data-validation="[NOTEMPTY]">
                                                                <option value="">Please Choose</option>
                                                                <option value="1">Ready!</option>
                                                                <option value="2">Not Ready</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Preferred Job: </label>
                                                            <textarea class="form-control" rows="5" id="pekerjaan_disukai_sifat" name="pekerjaan_disukai_sifat" placeholder="Preferred Job" data-validation="[NOTEMPTY]"></textarea>
                                                            <!-- <input type="text" class="form-control" name="pekerjaan_disukai_sifat" id="pekerjaan_disukai_sifat"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Sector: </label>
                                                            <textarea class="form-control" rows="5" id="pekerjaan_disukai_bidang" name="pekerjaan_disukai_bidang" placeholder="Sector" data-validation="[NOTEMPTY]"></textarea>
                                                            <!-- <input type="text" class="form-control" name="pekerjaan_disukai_bidang" id="pekerjaan_disukai_bidang"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Unwanted Jobs: </label>
                                                            <textarea class="form-control" rows="5" id="pekerjaan_tidak_sifat" name="pekerjaan_tidak_sifat" placeholder="Unwanted Jobs" data-validation="[NOTEMPTY]"></textarea>
                                                            <!-- <input type="text" class="form-control" name="pekerjaan_tidak_sifat" id="pekerjaan_tidak_sifat"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Sector: </label>
                                                            <textarea class="form-control" rows="5" id="pekerjaan_tidak_bidang" name="pekerjaan_tidak_bidang" placeholder="Sector" data-validation="[NOTEMPTY]"></textarea>
                                                            <!-- <input type="text" class="form-control" name="pekerjaan_tidak_bidang" id="pekerjaan_tidak_bidang"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Psikotest : </label>
                                                            <select class="form-control select2" name="psikotest" id="psikotest" data-validation="[NOTEMPTY]">
                                                                <option value="">Please Choose</option>
                                                                <option value="1">Ever</option>
                                                                <option value="2">Never</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Expected Salary: </label>
                                                            <input type="text" class="form-control" name="gaji_diharapkan" id="gaji_diharapkan" placeholder="Expected Salary" data-validation="[NOTEMPTY]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Expected Facilities : </label>
                                                            <textarea class="form-control" rows="5" id="fasilitas" name="fasilitas" placeholder="Expected Facilities" data-validation="[NOTEMPTY]"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Notice Period: </label>
                                                            <select class="form-control select2" name="mulai_bekerja" id="mulai_bekerja" data-validation="[NOTEMPTY]">
                                                                <option value="">Please Choose</option>
                                                                <option value="ASAP">ASAP</option>
                                                                <option value="2 Weeks">2 Weeks</option>
                                                                <option value="1 Mounth">1 Mounth</option>
                                                                <option value="1 Mounth 2 Weeks">1 Mounth 2 Weeks</option>
                                                                <option value="2 Mounth">2 Mounth</option>
                                                                <option value="2 Mounth 2 Weeks">2 Mounth 2 Weeks</option>
                                                                <option value="3 Mounth">3 Mounth</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                
                                                <button type="submit" class="btn btn-info pull-right continue">
                                                    <i class='fa fa-save'></i> Save
                                                </button>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			                <div class="tab-pane" id="other_documents" role="tabcard">
                                <!-- #other_documents -->
                                 <div class="row">
                                    <div class="col-lg-12" ">
                                        <div class="mb-5">   
                                            <div class="row" style="padding-bottom: 9px;">
                                                <div class="col-md-12">
                                                     <h5 class="text-black"><strong>Other Documents</strong></h5>
                                                </div>
                                            </div>
                                            <form id="form-other_documents" name="form-other_documents" action="#" method="POST" class="" enctype="multipart/form-data">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                <div class="body-detail-other_documents">
                                                    <div class="mb-5">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Docs Type</th>
                                                                <th>Docs Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                {list_docs}
                                                                    <tr>
                                                                        <td>
                                                                            <span class="text-uppercase text-default">
                                                                                {name}
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-uppercase text-default" id="preview_{id}">
                                                                                <span id="notes_{id}">{notes}</span>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-uppercase text-default" id="file_add_{id}">
                                                                                <input type="file" name="file_name_{id}" multiple="" class="file-reset">
                                                                            </span>

                                                                            <input type="hidden" name="file_id[{id}]" value="{id}">
                                                                            <input type="hidden" name="max_size_{id}" value="{max_size}">
                                                                            <input type="hidden" name="allowed_types_{id}" value="{allowed_types}">
                                                                            <input type="hidden" name="file_title_{id}" value="{name}">
                                                                        </td>
                                                                    </tr>
                                                                {/list_docs}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-info pull-right" style="margin-top: 20px;">
                                                            <i class='fa fa-save'></i> Upload
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>           
		</div>
	</div>
</section>
<script type="text/javascript">
        var list_education      = "{list_education}";
        var list_level_scope    = "{list_level_scope}";
        var list_stream         = "{list_stream}";
        var list_keterampilan   = "{list_keterampilan}";
        var list_rating         = "{list_rating}";
        var list_skill_years    = "{list_skill_years}";
        var list_status_keluarga= "{list_status_keluarga}";
        var list_jenis_kelamin  = "{list_jenis_kelamin}";
        var detail              = "{detail}";
        detail                  = detail==""?"personal_information":detail;

        function get_library(){
                $(".select2").select2();
                $('.select2').trigger('change.select2');
                $('.dropify').dropify();

                $('.summernote').summernote({
                    toolbar: [
                    // [groupName, [list of button]]
                        ['para', ['ul', 'ol']]
                        ],
                    height: 200,
                });

                $('.rating').barrating({
                    theme: 'fontawesome-stars',
                    showSelectedRating: false
                });

                $('.datetimepicker10').datetimepicker({
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down",
                        previous: 'fa fa-arrow-left',
                        next: 'fa fa-arrow-right'
                    },
                    viewMode: 'years',
                    format: 'MM/YYYY'
                });               

                 $('.datetimepicker9').datetimepicker({
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down",
                        previous: 'fa fa-arrow-left',
                        next: 'fa fa-arrow-right'
                    },
                    viewMode: 'years',
                    format: 'YYYY-MM-DD'
                });

                $('.datetimepicker11').datetimepicker({
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down",
                        previous: 'fa fa-arrow-left',
                        next: 'fa fa-arrow-right'
                    },
                    viewMode: 'years',
                    format: 'YYYY-MM-DD'
                });
                $('.datetimepicker12').datetimepicker({
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down",
                        previous: 'fa fa-arrow-left',
                        next: 'fa fa-arrow-right'
                    },
                    viewMode: 'years',
                    format: 'YYYY'
                });

                $(".delete-experience").on("click", function(){
                    var id = $(this).attr("data-id");
                    swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: "btn-default",
                        confirmButtonClass: "btn-warning",
                        confirmButtonText: "Remove",
                        closeOnConfirm: false
                    },
                    function(){
                        $("#experience_"+id).remove();
                        swal({
                            title: "Deleted!",
                            text: "Data has been deleted",
                            type: "success",
                            confirmButtonClass: "btn-success"
                        });
                    });
                    console.log(id);
                });

                $(".delete-education").on("click", function(){
                    var id = $(this).attr("data-id");
                    swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: "btn-default",
                        confirmButtonClass: "btn-warning",
                        confirmButtonText: "Remove",
                        closeOnConfirm: false
                    },
                    function(){
                        $("#education_"+id).remove();
                        swal({
                            title: "Deleted!",
                            text: "Data has been deleted",
                            type: "success",
                            confirmButtonClass: "btn-success"
                        });
                    });
                    console.log(id);
                });                

                $(".delete-organizational_experience").on("click", function(){
                    var id = $(this).attr("data-id");
                    swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: "btn-default",
                        confirmButtonClass: "btn-warning",
                        confirmButtonText: "Remove",
                        closeOnConfirm: false
                    },
                    function(){
                        $("#organizational_experience_"+id).remove();
                        swal({
                            title: "Deleted!",
                            text: "Data has been deleted",
                            type: "success",
                            confirmButtonClass: "btn-success"
                        });
                    });
                    console.log(id);
                });

                $(".delete-family_relationship").on("click", function(){
                    var id = $(this).attr("data-id");
                    swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: "btn-default",
                        confirmButtonClass: "btn-warning",
                        confirmButtonText: "Remove",
                        closeOnConfirm: false
                    },
                    function(){
                        $("#family_relationship_"+id).remove();
                        swal({
                            title: "Deleted!",
                            text: "Data has been deleted",
                            type: "success",
                            confirmButtonClass: "btn-success"
                        });
                    });
                    
                    console.log(id);
                });                

                $(".delete-achievement").on("click", function(){
                    var id = $(this).attr("data-id");
                    swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: "btn-default",
                        confirmButtonClass: "btn-warning",
                        confirmButtonText: "Remove",
                        closeOnConfirm: false
                    },
                    function(){
                        $("#achievement_"+id).remove();
                        swal({
                            title: "Deleted!",
                            text: "Data has been deleted",
                            type: "success",
                            confirmButtonClass: "btn-success"
                        });
                    });

                    console.log(id);
                });
                $(".delete-skill").on("click", function(){
                    var id = $(this).attr("data-id");
                    swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: "btn-default",
                        confirmButtonClass: "btn-warning",
                        confirmButtonText: "Remove",
                        closeOnConfirm: false
                    },
                    function(){
                        $("#skill_"+id).remove();
                        swal({
                            title: "Deleted!",
                            text: "Data has been deleted",
                            type: "success",
                            confirmButtonClass: "btn-success"
                        });
                    });
                    console.log(id);
                });

                $(".current_date").change(function() {
                    var id =  $(this).attr("data-id");
                    if(this.checked) {
                        $("#date_end_"+id).val("");
                        $("#date_end_"+id).prop("disabled",true);
                    }else{
                        $("#date_end_"+id).val("");
                        $("#date_end_"+id).prop("disabled",false);

                    }
                });
        }

        function get_detail( detail ){
            $("#personal_information").hide();
            $("#education").hide();
            $("#experience").hide();
            $("#organizational_experience").hide();
            $("#family_relationship").hide();
            $("#self_description").hide();
            $("#skill").hide();
            $("#achievement").hide();
            $("#others").hide();

            $('a.nav-link[data-target="#'+detail+'"]').click();

            switch(detail) {
                case "personal_information":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/personal_information',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#personal_information").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#personal_information").show();
                            $("#no_ktp").val(result.no_ktp);
                            $('#email').val(result.email);              
                            $('#no_ktp').val(result.no_ktp);             
                            $('#fullname').val(result.fullname);           
                            $('#nama_panggilan').val(result.nama_panggilan);     
                            $('#jenis_kelamin').val(result.jenis_kelamin);      
                            $('#alamat_domisili').val(result.alamat_domisili);    
                            $('#kota_domisili').val(result.kota_domisili);      
                            $('#alamat_ktp').val(result.alamat_ktp);         
                            $('#agama').val(result.agama);              
                            $('#tempat_lahir').val(result.tempat_lahir);       
                            $('#tgl_lahir').val(result.tgl_lahir);          
                            $('#usia').val(result.usia);               
                            $('#usia_bulan').val(result.usia_bulan);         
                            $('#usia_hari').val(result.usia_hari);          
                            $('#no_npwp').val(result.no_npwp);            
                            $('#no_jamsostek').val(result.no_jamsostek);       
                            $('#kode_pos').val(result.kode_pos);           
                            $('#phone').val(result.phone);              
                            $('#status_menikah').val(result.status_menikah);     
                            $('#kewarganegaraan').val(result.kewarganegaraan);    
                            $('#no_sima').val(result.no_sima);            
                            $('#no_simc').val(result.no_simc); 
                            $('#skype_id').val(result.skype);
                            $('#linkedin').val(result.linkedin);
                            $('#facebook').val(result.facebook);
                            $('#twitter').val(result.twitter);
                            $('#instagram').val(result.instagram);
                            $('#github').val(result.github);

                            $('.select2').trigger('change.select2');
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;
                
                case "education":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/education',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#education").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#education").show();
                            if (!jQuery.isEmptyObject(result)){
                                $(".body-detail-education").html("");
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    $(".body-detail-education").append('<div class="content-detail" style="margin-top:10px;" data-id="'+result[index].id+'" id="education_'+result[index].id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Education: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][education_level]" id="education_level_'+result[index].id+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_education+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>University / School: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][university]" id="university_'+result[index].id+'" placeholder="University Name" class="form-control" data-validation="[NOTEMPTY]" value="'+result[index].nama_jenjang_pendidikan+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Major: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][major]" id="major_'+result[index].id+'" placeholder="Major Name" class="form-control"  data-validation="[NOTEMPTY]" value="'+result[index].jurusan+'" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label >GPA / Score: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant['+result[index].id+'][current_gpa]" id="current_gpa_'+result[index].id+'" placeholder="Current GPA" class="form-control" value="'+result[index].current_gpa+'" data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant['+result[index].id+'][score_gpa]" id="score_gpa_'+result[index].id+'" placeholder="Max GPA" class="form-control" value="'+result[index].score_gpa+'" data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Education: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant['+result[index].id+'][education_date_start]" id="education_date_start_'+result[index].id+'" placeholder="Start" class="form-control datetimepicker12" value="'+result[index].tahun_mulai+'"  data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant['+result[index].id+'][education_date_end]" id="education_date_end_'+result[index].id+'" placeholder="End" class="form-control datetimepicker12" value="'+result[index].tahun_selesai+'" data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row" id="button-remove-'+result[index].id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+result[index].id+'" class="btn btn-danger pull-right delete-education" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                                    if (no == "1" ) { $("#button-remove-"+result[index].id).remove() }
                                    no++;
                                    $("#education_level_"+result[index].id).val(result[index].jenjang_pendidikan);
                                });
                                
                            }else{
                                $(".body-detail-education").append('<div class="content-detail" style="margin-top:10px;" data-id="1" id="education_1">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Education: </label>\
                                                <select class="form-control select2" name="applicant[1][education_level]" id="education_level_1" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_education+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>University / School: </label>\
                                                <input type="text" name="applicant[1][university]" id="university_1" placeholder="University Name" class="form-control" data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Major: </label>\
                                                <input type="text" name="applicant[1][major]" id="major_1" placeholder="Major Name" class="form-control"  data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label >GPA / Score: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant[1][current_gpa]" id="current_gpa_1" placeholder="Current GPA" class="form-control" value="" data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant[1][score_gpa]" id="score_gpa_1" placeholder="Max GPA" class="form-control" value="" data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Education: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant[1][education_date_start]" id="education_date_start_1" placeholder="Start" class="form-control datetimepicker12" value="" data-validation="[NOTEMPTY]" />\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <input type="text" name="applicant[1][education_date_end]" id="education_date_end_1" placeholder="End" class="form-control datetimepicker12" value="" data-validation="[NOTEMPTY]"/>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                            }
                            get_library();
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case "experience":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/experience',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#experience").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#experience").show();
                            if (!jQuery.isEmptyObject(result)){
                                $(".body-detail-experience").html("");
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    $(".body-detail-experience").append('<div class="content-detail-experience" style="margin-top:10px;" data-id="'+result[index].id+'" id="experience_'+result[index].id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Company Name: </label>\
                                                <input type="text" class="form-control" name="applicant['+result[index].id+'][nama_perusahaan]" data-validation="[NOTEMPTY]" value="'+result[index].nama_perusahaan+'" placeholder="Company Name">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][jabatan]" id="jabatan_'+result[index].id+'" placeholder="Position Name" class="form-control" data-validation="[NOTEMPTY]" value="'+result[index].jabatan+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Work Location: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][alamat_perusahaan]" id="alamat_perusahaan_'+result[index].id+'" placeholder="Work Location" class="form-control"  data-validation="[NOTEMPTY]" value="'+result[index].alamat_perusahaan+'" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label >Work Experience: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9">\
                                                            <input type="text" class="form-control" name="applicant['+result[index].id+'][date_start]" id="date_start_'+result[index].id+'" placeholder="Start Date" value="'+result[index].date_start+'" data-validation="[NOTEMPTY]"/>\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9">\
                                                            <input type="text" class="form-control" name="applicant['+result[index].id+'][date_end]" id="date_end_'+result[index].id+'" placeholder="End Date" value="'+result[index].date_end+'"/>\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                        <label class="cat__core__control cat__core__control--checkbox" style="padding-top:10px;">\
                                                            <input type="checkbox" class="current_date" data-id='+result[index].id+' name="applicant['+result[index].id+'][current_date]" id="current_date_'+result[index].id+'"/>\
                                                            Current Job\
                                                            <div class="cat__core__control__indicator"></div>\
                                                        </label>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <textarea class="form-control summernote" name="applicant['+result[index].id+'][deskripsi]" id="deskripsi_'+result[index].id+'"  rows="5">'+result[index].deskripsi_pekerjaan+'</textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Current Salary: </label>\
                                                <input type="text" class="form-control" name="applicant['+result[index].id+'][gaji]" id="gaji_'+result[index].id+'"  value="'+result[index].gaji+'" placeholder="Current Salary">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Reason to stop: </label>\
                                                <textarea class="form-control " name="applicant['+result[index].id+'][alasan_berhenti]" id="alasan_berhenti_'+result[index].id+'"  rows="3" data-validation="[NOTEMPTY]">'+result[index].alasan_berhenti+'</textarea>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Facilities: </label>\
                                                <textarea class="form-control " name="applicant['+result[index].id+'][fasilitas]" id="fasilitas_'+result[index].id+'"  rows="3" data-validation="[NOTEMPTY]">'+result[index].fasilitas+'</textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Recomendation: </label>\
                                                <input type="text" class="form-control" name="applicant['+result[index].id+'][rekomendasi]" id="rekomendasi_'+result[index].id+'" value="'+result[index].rekomendasi+'" placeholder="Recomendation Name">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>No Contact: </label>\
                                                 <input type="text" class="form-control" name="applicant['+result[index].id+'][kontak_rekomendasi]" id="kontak_rekomendasi_'+result[index].id+'" value="'+result[index].kontak_rekomendasi+'" placeholder="Recomendation Contact">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row" id="button-remove-'+result[index].id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+result[index].id+'" class="btn btn-danger pull-right delete-experience" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                                    if (result[index].id == "1" ) { $("#button-remove-"+result[index].id).remove() }
                                    no++;
                                    $("#experience_level_"+result[index].id).val(result[index].jenjang_pendidikan);
                                    if (result[index].current_date=="1") {
                                        $("#current_date_"+result[index].id).prop('checked', true);  
                                        $("#date_end_"+result[index].id).prop('disabled',true);
                                    }else{
                                        $("#current_date_"+result[index].id).prop('checked', false);
                                        $("#date_end_"+result[index].id).prop('disabled',false);
                                    }
                                });
                                
                            }else{
                                $(".body-detail-experience").append('<div class="content-detail-experience" style="margin-top:10px;" data-id="1" id="experience_1">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Company Name: </label>\
                                                <input type="text" class="form-control" name="applicant[1][nama_perusahaan]" data-validation="[NOTEMPTY]" value="" placeholder="Company Name">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant[1][jabatan]" id="jabatan_1" placeholder="Position Name" class="form-control" data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Work Location: </label>\
                                                <input type="text" name="applicant[1][alamat_perusahaan]" id="alamat_perusahaan_1" placeholder="Work Location" class="form-control"  data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label >Work Experience: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9" >\
                                                            <input type="text" class="form-control" name="applicant[1][date_start]" id="date_start_1" placeholder="Start Date" data-validation="[NOTEMPTY]/>\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9" >\
                                                            <input type="text" class="form-control" name="applicant[1][date_end]" id="date_end_1" placeholder="End Date" />\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                        <label class="cat__core__control cat__core__control--checkbox" style="padding-top:10px;">\
                                                            <input type="checkbox" class="current_date" name="applicant[1][current_date]" id="current_date_1"/>Current Job\
                                                            <div class="cat__core__control__indicator"></div>\
                                                        </label>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <textarea class="form-control summernote" name="applicant[1][deskripsi]" id="deskripsi_1" rows="5"></textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Current Salary: </label>\
                                                <input type="text" class="form-control" name="applicant[1][gaji]" id="gaji_1" data-validation="[NOTEMPTY]"  placeholder="Current Salary">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Reason to stop: </label>\
                                                <textarea class="form-control " name="applicant[1][alasan_berhenti]" id="alasan_berhenti_1"  rows="3"></textarea>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Facilities: </label>\
                                                <textarea class="form-control " name="applicant[1][fasilitas]" id="fasilitas_1"  rows="3"></textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Recomendation: </label>\
                                                <input type="text" class="form-control" name="applicant[1][rekomendasi]" id="rekomendasi_1" data-validation="[NOTEMPTY]"  placeholder="Recomendation Name">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>No Contact: </label>\
                                                 <input type="text" class="form-control" name="applicant[1][kontak_rekomendasi]" id="kontak_rekomendasi_1" data-validation="[NOTEMPTY]"  placeholder="Recomendation Contact">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                            }
                            get_library();

                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case "organizational_experience":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/organizational_experience',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#organizational_experience").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#organizational_experience").show();
                            if (!jQuery.isEmptyObject(result)){
                                $(".body-detail-organizational_experience").html("");
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    $(".body-detail-organizational_experience").append('<div class="content-detail-organizational_experience" style="margin-top:10px;" data-id="'+result[index].id+'" id="organizational_experience_'+result[index].id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Organizational Name: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][nama_organisasi]" id="nama_organisasi_'+result[index].id+'" placeholder="Organisasi Name" class="form-control" data-validation="[NOTEMPTY]" value="'+result[index].nama_organisasi+'" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Location: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][tempat]" id="tempat_'+result[index].id+'" placeholder="Tempat" class="form-control" data-validation="[NOTEMPTY]" value="'+result[index].tempat+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][sifat_organisasi]" id="sifat_organisasi_'+result[index].id+'" placeholder="Description" class="form-control"  data-validation="[NOTEMPTY]" value="'+result[index].sifat_organisasi+'" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][jabatan]" id="jabatan_'+result[index].id+'" placeholder="Position" class="form-control"  data-validation="[NOTEMPTY]" value="'+result[index].jabatan+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label >Organizational Experience: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9">\
                                                            <input type="text" class="form-control" name="applicant['+result[index].id+'][date_start]" id="date_start_'+result[index].id+'" placeholder="Start Date" value="'+result[index].date_start+'" data-validation="[NOTEMPTY]"/>\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9">\
                                                            <input type="text" class="form-control" name="applicant['+result[index].id+'][date_end]" id="date_end_'+result[index].id+'" placeholder="End Date" value="'+result[index].date_end+'" data-validation="[NOTEMPTY]" />\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row" id="button-remove-'+result[index].id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+result[index].id+'" class="btn btn-danger pull-right delete-organizational_experience" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                                    if ( no == "1" ) { $("#button-remove-"+result[index].id).remove() }
                                    no++;
                                    $("#education_level_"+result[index].id).val(result[index].jenjang_pendidikan);
                                });
                                
                            }else{
                                $(".body-detail-organizational_experience").append('<div class="content-detail-organizational_experience" style="margin-top:10px;" data-id="1" id="organizational_experience_1">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Organizational Name: </label>\
                                                <input type="text" name="applicant[1][nama_organisasi]" id="nama_organisasi_1" placeholder="Organisasi Name" class="form-control" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Location: </label>\
                                                <input type="text" name="applicant[1][tempat]" id="tempat_1" placeholder="Tempat" class="form-control" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <input type="text" name="applicant[1][sifat_organisasi]" id="sifat_organisasi_1" placeholder="Description" class="form-control"  data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant[1][jabatan]" id="jabatan_1" placeholder="Position" class="form-control"  data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label >Organizational Experience: </label>\
                                                <div class="row">\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9">\
                                                            <input type="text" class="form-control" name="applicant[1][date_start]" id="date_start_1" placeholder="Start Date" value="" data-validation="[NOTEMPTY]"/>\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                    </div>\
                                                    <div class="col-sm-6">\
                                                        <div class="input-group date datetimepicker9">\
                                                            <input type="text" class="form-control" name="applicant[1][date_end]" id="date_end_1" placeholder="End Date" value="" data-validation="[NOTEMPTY]" />\
                                                            <span class="input-group-addon">\
                                                                <span class="icmn-calendar">\
                                                                </span>\
                                                            </span>\
                                                        </div>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                            }
                            get_library();
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case "family_relationship":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/family_relationship',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#family_relationship").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#family_relationship").show();
                            if (!jQuery.isEmptyObject(result)){
                                $(".body-detail-family_relationship").html("");
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    $(".body-detail-family_relationship").append('<div class="content-detail-family_relationship" style="margin-top:10px;" data-id="'+result[index].id+'" id="family_relationship_'+result[index].id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Family Status: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][status_keluarga]" id="status_keluarga_'+result[index].id+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_status_keluarga+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Fullname: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][nama]" id="nama_'+result[index].id+'" placeholder="Name" class="form-control" data-validation="[NOTEMPTY]" value="'+result[index].nama+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Gender: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][jenis_kelamin]" id="jenis_kelamin_'+result[index].id+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_jenis_kelamin+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Place Of Birth: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][tempat_lahir]" id="tempat_lahir_'+result[index].id+'" placeholder="Place Of Birth" class="form-control"  data-validation="[NOTEMPTY]" value="'+result[index].tempat_lahir+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Date Of Birth: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][tgl_lahir]" id="tgl_lahir_'+result[index].id+'" placeholder="Date Of Birth" class="form-control datetimepicker11"  data-validation="[NOTEMPTY]" value="'+result[index].tgl_lahir+'" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Last Education: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][pendidikan_terakhir]" id="pendidikan_terakhir_'+result[index].id+'" value="'+result[index].pendidikan_terakhir+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_education+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][jabatan_pekerjaan]" id="jabatan_pekerjaan_'+result[index].id+'" placeholder="Position" class="form-control"  value="'+result[index].jabatan_pekerjaan+'" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Companny Name: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][perusahaan]" id="perusahaan_'+result[index].id+'" placeholder="Companny Name" class="form-control"  value="'+result[index].perusahaan+'" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <textarea  name="applicant['+result[index].id+'][keterangan]" id="keterangan_'+result[index].id+'" placeholder="Description" class="form-control summernote" >'+result[index].keterangan+'</textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row" id="button-remove-'+result[index].id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+result[index].id+'" class="btn btn-danger pull-right delete-family_relationship" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                                    if ( no == "1" ) { $("#button-remove-"+result[index].id).remove() }
                                    no++;
                                    $("#status_keluarga_"+result[index].id).val(result[index].status_keluarga);
                                    $("#jenis_kelamin_"+result[index].id).val(result[index].jenis_kelamin);
                                });
                                
                            }else{
                                $(".body-detail-family_relationship").append('<div class="content-detail-family_relationship" style="margin-top:10px;" data-id="1" id="family_relationship_1">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Family Status: </label>\
                                                <select class="form-control select2" name="applicant[1][status_keluarga]" id="status_keluarga_1" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_status_keluarga+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Fullname: </label>\
                                                <input type="text" name="applicant[1][nama]" id="nama_1" placeholder="Name" class="form-control" data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Gender: </label>\
                                                <select class="form-control select2" name="applicant[1][jenis_kelamin]" id="jenis_kelamin_1" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_jenis_kelamin+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Place Of Birth: </label>\
                                                <input type="text" name="applicant[1][tempat_lahir]" id="tempat_lahir_1" placeholder="Place Of Birth" class="form-control"  data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Date Of Birth: </label>\
                                                <input type="text" name="applicant[1][tgl_lahir]" id="tgl_lahir_1" placeholder="Date Of Birth" class="form-control datetimepicker11"  data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Last Education: </label>\
                                                <select class="form-control select2" name="applicant[1][pendidikan_terakhir]" id="pendidikan_terakhir_1" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_education+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant[1][jabatan_pekerjaan]" id="jabatan_pekerjaan_1" placeholder="Position" class="form-control" value="" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Companny Name: </label>\
                                                <input type="text" name="applicant[1][perusahaan]" id="perusahaan_1" placeholder="Companny Name" class="form-control" value="" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <textarea  name="applicant[1][keterangan]" id="keterangan_1" placeholder="Description" class="form-control summernote" value="" ></textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                            }
                            get_library();
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case "self_description":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/self_description',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#self_description").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#self_description").show();
                            if (!jQuery.isEmptyObject(result)){
                                $("#profil_diri").val(result.profil_diri);
                                $("#kualifikasi").val(result.kualifikasi);
                                $("#keterampilan").val(result.keterampilan);
                                $("#kegiatan").val(result.kegiatan);
                                // $("#prestasi").val(result.prestasi);
                                $("#publikasi").val(result.publikasi);
                                $("#anggota_profesional").val(result.anggota_profesional);
                            }
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case "skill":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/skill',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#skill").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#skill").show();
                            if (!jQuery.isEmptyObject(result)){
                                $(".body-detail-skill").html("");
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    $(".body-detail-skill").append('<div class="content-detail-skill" style="margin-top:10px;" data-id="'+result[index].id+'" id="skill_'+result[index].id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Skill Name: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][keterampilan_id]" id="keterampilan_id_'+result[index].id+'">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_keterampilan+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-2">\
                                            <div class="form-group">\
                                                <label>Rating: </label>\
                                                <select class="form-control rating" name="applicant['+result[index].id+'][rating]" id="rating_'+result[index].id+'">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_rating+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-3">\
                                            <div class="form-group">\
                                                <label>Year: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][skill_years]" id="skill_years_'+result[index].id+'">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_skill_years+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                    <div class="row" id="button-remove-'+result[index].id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+result[index].id+'" class="btn btn-danger pull-right delete-skill" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                                    if (no == "1" ) { $("#button-remove-"+result[index].id).remove() }
                                    no++;
                                    $("#keterampilan_id_"+result[index].id).val(result[index].keterampilan_id);
                                    $("#rating_"+result[index].id).val(result[index].rating);
                                    $("#skill_years_"+result[index].id).val(result[index].skill_years);
                                    console.log(result[index].rating);
                                });
                                
                            }else{
                                $(".body-detail-skill").append('<div class="content-detail-skill" style="margin-top:10px;" data-id="1" id="skill_1">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Skill Name: </label>\
                                                <select class="form-control select2" name="applicant[1][keterampilan_id]" id="keterampilan_id_1">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_keterampilan+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-2">\
                                            <div class="form-group">\
                                                <label>Rating: </label>\
                                                <select class="form-control rating" name="applicant[1][rating]" id="rating_1">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_rating+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-3">\
                                            <div class="form-group">\
                                                <label>Year: </label>\
                                                <select class="form-control select2" name="applicant[1][skill_years]" id="skill_years_1">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_skill_years+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                            }
                            get_library();
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case "achievement":
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/achievement',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#achievement").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#achievement").show();
                            if (!jQuery.isEmptyObject(result)){
                                $(".body-detail-achievement").html("");
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    $(".body-detail-achievement").append('<div class="content-detail-achievement" style="margin-top:10px;" data-id="'+result[index].id+'" id="achievement_'+result[index].id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Award Name: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][award_name]" id="award_name_'+result[index].id+'" placeholder="Name" class="form-control" data-validation="[NOTEMPTY]" value="'+result[index].award_name+'" >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Award Year: </label>\
                                                <input type="text" name="applicant['+result[index].id+'][year]" id="year_'+result[index].id+'" placeholder="Award Year" class="form-control datetimepicker12" data-validation="[NOTEMPTY]" value="'+result[index].year+'" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Skala: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][level_scope]" id="level_scope_'+result[index].id+'">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_level_scope+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Category: </label>\
                                                <select class="form-control select2" name="applicant['+result[index].id+'][stream]" id="stream_'+result[index].id+'">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_stream+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                     </div>\
                                    <div class="row" id="button-remove-'+result[index].id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+result[index].id+'" class="btn btn-danger pull-right delete-achievement" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                                    if (no == "1" ) { $("#button-remove-"+result[index].id).remove() }
                                    no++;
                                    $("#level_scope_"+result[index].id).val(result[index].level_scope);
                                    $("#stream_"+result[index].id).val(result[index].stream);
                                });
                                
                            }else{
                                $(".body-detail-achievement").append('<div class="content-detail-achievement" style="margin-top:10px;" data-id="1" id="achievement_1">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Award Name: </label>\
                                                <input type="text" name="applicant[1][award_name]" id="award_name_1" placeholder="Name" class="form-control" data-validation="[NOTEMPTY]"  >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Award Year: </label>\
                                                <input type="text" name="applicant[1][year]" id="year_1" placeholder="Award Year" class="form-control datetimepicker12" data-validation="[NOTEMPTY]" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Skala: </label>\
                                                <select class="form-control select2" name="applicant[1][level_scope]" id="level_scope_1">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_level_scope+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Category: </label>\
                                                <select class="form-control select2" name="applicant[1][stream]" id="stream_1">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_stream+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                     </div>\
                                    <hr>\
                                </div>');
                            }
                            get_library();
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case 'others': 
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/others',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#others").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#others").show();
                            if (!jQuery.isEmptyObject(result)){
                                $("#lembur").val(result.lembur);
                                $("#tugas_luar_kota").val(result.tugas_luar_kota);
                                $("#ditempatkan_luar_kota").val(result.ditempatkan_luar_kota);
                                $("#pekerjaan_disukai_sifat").val(result.pekerjaan_disukai_sifat);
                                $("#pekerjaan_disukai_bidang").val(result.pekerjaan_disukai_bidang);
                                $("#pekerjaan_tidak_sifat").val(result.pekerjaan_tidak_sifat);
                                $("#pekerjaan_tidak_bidang").val(result.pekerjaan_tidak_bidang);
                                $("#lembur").val(result.lembur);
                                $("#gaji_diharapkan").val(result.gaji_diharapkan);
                                $("#fasilitas").val(result.fasilitas);
                                $("#mulai_bekerja").val(result.mulai_bekerja);
                                $('.select2').trigger('change.select2');
                            }
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                case 'other_documents':
                    $.ajax({
                        type: "POST",
                        url: '{base_url}/other_documents',
                        dataType: 'json',      
                        beforeSend: function(){
                            NProgress.start();
                            $("#other_documents").hide();
                        },
                        success: function(result) {
                            NProgress.done();
                            $("#other_documents").show();
                            if (!jQuery.isEmptyObject(result)){
                                var no = 1;
                                $.each(result, function( index, value ) {
                                    if (!jQuery.isEmptyObject(result)){
                                        
                                        $("#notes_"+result[index].file_id).remove();
                                        $("#url_"+result[index].file_id).remove();
                                        $("#preview_"+result[index].file_id).append("<a id='url_"+result[index].file_id+"' href='{base}assets/backend/documents/pelamar/"+result[index].pelamar_id+"/"+result[index].filename+"' id='preview_file"+result[index].file_id+"' target='_blank'>"+result[index].filename+"</a>");
                                    }
                                });
                            }
                        },  
                        error: function() {
                            NProgress.done();
                            console.log("error");
                        }       
                    });
                break;

                default:
            } 
        }

       $(function() {



            get_library();

            $(".select2").select2();

            get_detail(detail);

            $("#add-education").on("click", function(){
                var ids = $(".content-detail").map(function() {
                    return $(this).attr("data-id");
                }).get();
                
                var next_id =  Math.max.apply( Math, ids ) + 1;

                $(".body-detail-education").append('<div class="content-detail" style="margin-top:10px;" data-id="'+next_id+'" id="education_'+next_id+'" >\
                            <div class="row ">\
                                <div class="col-md-6">\
                                    <div class="form-group">\
                                        <label>Education: </label>\
                                        <select class="form-control select2" name="applicant['+next_id+'][education_level]" id="education_level_'+next_id+'" data-validation="[NOTEMPTY]">\
                                            <option value="">Please Choose </option>\
                                            '+list_education+'\
                                        </select>\
                                    </div>\
                                </div>\
                                <div class="col-md-6">\
                                    <div class="form-group">\
                                        <label>University / School: </label>\
                                        <input type="text" name="applicant['+next_id+'][university]" id="university_'+next_id+'" placeholder="University Name" class="form-control" data-validation="[NOTEMPTY]" value="" >\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="row">\
                                <div class="col-md-6">\
                                    <div class="form-group">\
                                        <label>Major: </label>\
                                        <input type="text" name="applicant['+next_id+'][major]" id="major_'+next_id+'" placeholder="Major Name" class="form-control"  data-validation="[NOTEMPTY]" value="" >\
                                    </div>\
                                </div>\
                                <div class="col-md-6">\
                                    <div class="form-group">\
                                        <label >GPA / Score: </label>\
                                        <div class="row">\
                                            <div class="col-sm-6">\
                                                <input type="text" name="applicant['+next_id+'][current_gpa]" id="current_gpa_'+next_id+'" placeholder="Current GPA" class="form-control" value="" data-validation="[NOTEMPTY]" />\
                                            </div>\
                                            <div class="col-sm-6">\
                                                <input type="text" name="applicant['+next_id+'][score_gpa]" id="score_gpa_'+next_id+'" placeholder="Max GPA" class="form-control" value="" data-validation="[NOTEMPTY]" />\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="row">\
                                <div class="col-md-6">\
                                    <div class="form-group">\
                                        <label>Education: </label>\
                                        <div class="row">\
                                            <div class="col-sm-6">\
                                                <input type="text" name="applicant['+next_id+'][education_date_start]" id="education_date_start_'+next_id+'" placeholder="Start" class="form-control datetimepicker12" data-validation="[NOTEMPTY]"  />\
                                            </div>\
                                            <div class="col-sm-6">\
                                                <input type="text" name="applicant['+next_id+'][education_date_end]" id="education_date_end_'+next_id+'" placeholder="End" class="form-control datetimepicker12" data-validation="[NOTEMPTY]" />\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="row" id="button-remove-'+next_id+'">\
                                <div class="col-md-12">\
                                    <a href="javascript: void(0)" data-id="'+next_id+'" class="btn btn-danger pull-right delete-education" >\
                                        <i class="fa fa-trash"></i>\
                                    </a>\
                                </div>\
                            </div>\
                            <hr>\
                        </div>');
                get_library();
            });     

            $("#add-experience").on("click", function(){
                var ids = $(".content-detail-experience").map(function() {
                    return $(this).attr("data-id");
                }).get();
                
                var next_id =  Math.max.apply( Math, ids ) + 1;

                $(".body-detail-experience").append('<div class="content-detail-experience" style="margin-top:10px;" data-id="'+next_id+'" id="experience_'+next_id+'">\
                        <div class="row ">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Company Name: </label>\
                                    <input type="text" class="form-control" name="applicant['+next_id+'][nama_perusahaan]" data-validation="[NOTEMPTY]" value="" >\
                                </div>\
                            </div>\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Position: </label>\
                                    <input type="text" name="applicant['+next_id+'][jabatan]" id="jabatan_'+next_id+'" placeholder="Position Name" class="form-control" data-validation="[NOTEMPTY]" value="" >\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Work Location: </label>\
                                    <input type="text" name="applicant['+next_id+'][alamat_perusahaan]" id="alamat_perusahaan_'+next_id+'" placeholder="Work Location" class="form-control"  data-validation="[NOTEMPTY]" value="" >\
                                </div>\
                            </div>\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label >Work Experience: </label>\
                                    <div class="row">\
                                        <div class="col-sm-6">\
                                            <div class="input-group date datetimepicker9">\
                                                <input type="text" class="form-control" name="applicant['+next_id+'][date_start]" id="date_start_'+next_id+'" placeholder="Start Date" data-validation="[NOTEMPTY]" />\
                                                <span class="input-group-addon">\
                                                    <span class="icmn-calendar">\
                                                    </span>\
                                                </span>\
                                            </div>\
                                        </div>\
                                        <div class="col-sm-6">\
                                            <div class="input-group date datetimepicker9">\
                                                <input type="text" class="form-control" name="applicant['+next_id+'][date_end]" id="date_end_'+next_id+'" placeholder="End Date" data-validation="[NOTEMPTY]"/>\
                                                <span class="input-group-addon">\
                                                    <span class="icmn-calendar">\
                                                    </span>\
                                                </span>\
                                            </div>\
                                            <label class="cat__core__control cat__core__control--checkbox" style="padding-top:10px;">\
                                                <input type="checkbox" class="current_date" name="applicant['+next_id+'][current_date]" id="current_date_'+next_id+'"/>Current Job\
                                                <div class="cat__core__control__indicator"></div>\
                                            </label>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row ">\
                            <div class="col-md-12">\
                                <div class="form-group">\
                                    <label>Description: </label>\
                                    <textarea class="form-control summernote" name="applicant['+next_id+'][deskripsi]" id="deskripsi_'+next_id+'" rows="5"></textarea>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row ">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Current Salary: </label>\
                                    <input type="text" class="form-control" name="applicant['+next_id+'][gaji]" id="gaji_'+next_id+'" placeholder="Current Salary">\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row ">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Reason to stop: </label>\
                                    <textarea class="form-control " name="applicant['+next_id+'][alasan_berhenti]" id="alasan_berhenti_'+next_id+'"  rows="3"></textarea>\
                                </div>\
                            </div>\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Facilities: </label>\
                                    <textarea class="form-control " name="applicant['+next_id+'][fasilitas]" id="fasilitas_'+next_id+'"  rows="3"></textarea>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row ">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Recomendation: </label>\
                                    <input type="text" class="form-control" name="applicant['+next_id+'][rekomendasi]" id="rekomendasi_'+next_id+'" placeholder="Recomendation Name">\
                                </div>\
                            </div>\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>No Contact: </label>\
                                     <input type="text" class="form-control" name="applicant['+next_id+'][kontak_rekomendasi]" id="kontak_rekomendasi_'+next_id+'" placeholder="Recomendation Contact">\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row" id="button-remove-'+next_id+'">\
                            <div class="col-md-12">\
                                <a href="javascript: void(0)" data-id="'+next_id+'" class="btn btn-danger pull-right delete-experience" >\
                                    <i class="fa fa-trash"></i>\
                                </a>\
                            </div>\
                        </div>\
                        <hr>\
                    </div>');
                get_library();
            });

            $("#add-organizational_experience").on("click", function(){
                var ids = $(".content-detail-organizational_experience").map(function() {
                    return $(this).attr("data-id");
                }).get();
                
                var next_id =  Math.max.apply( Math, ids ) + 1;

                $(".body-detail-organizational_experience").append('<div class="content-detail-organizational_experience" style="margin-top:10px;" data-id="'+next_id+'" id="organizational_experience_'+next_id+'">\
                    <div class="row ">\
                        <div class="col-md-6">\
                            <div class="form-group">\
                                <label>Organizational Name: </label>\
                                <input type="text" name="applicant['+next_id+'][nama_organisasi]" id="nama_organisasi_'+next_id+'" placeholder="Organizational Name" class="form-control" data-validation="[NOTEMPTY]">\
                            </div>\
                        </div>\
                        <div class="col-md-6">\
                            <div class="form-group">\
                                <label>Location: </label>\
                                <input type="text" name="applicant['+next_id+'][tempat]" id="tempat_'+next_id+'" placeholder="Location" class="form-control" data-validation="[NOTEMPTY]">\
                            </div>\
                        </div>\
                    </div>\
                    <div class="row">\
                        <div class="col-md-6">\
                            <div class="form-group">\
                                <label>Description: </label>\
                                <input type="text" name="applicant['+next_id+'][sifat_organisasi]" id="sifat_organisasi_'+next_id+'" placeholder="Description" class="form-control"  data-validation="[NOTEMPTY]">\
                            </div>\
                        </div>\
                        <div class="col-md-6">\
                            <div class="form-group">\
                                <label>Position: </label>\
                                <input type="text" name="applicant['+next_id+'][jabatan]" id="jabatan_'+next_id+'" placeholder="Position" class="form-control"  data-validation="[NOTEMPTY]">\
                            </div>\
                        </div>\
                    </div>\
                    <div class="row">\
                        <div class="col-md-6">\
                            <div class="form-group">\
                                <label >Organizational Experience: </label>\
                                <div class="row">\
                                    <div class="col-sm-6">\
                                        <div class="input-group date datetimepicker9">\
                                            <input type="text" class="form-control" name="applicant['+next_id+'][date_start]" id="date_start_'+next_id+'" placeholder="Start Date" value="" data-validation="[NOTEMPTY]"/>\
                                            <span class="input-group-addon">\
                                                <span class="icmn-calendar">\
                                                </span>\
                                            </span>\
                                        </div>\
                                    </div>\
                                    <div class="col-sm-6">\
                                        <div class="input-group date datetimepicker9">\
                                            <input type="text" class="form-control" name="applicant['+next_id+'][date_end]" id="date_end_'+next_id+'" placeholder="End Date" value="" data-validation="[NOTEMPTY]" />\
                                            <span class="input-group-addon">\
                                                <span class="icmn-calendar">\
                                                </span>\
                                            </span>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                    <div class="row" id="button-remove-'+next_id+'">\
                        <div class="col-md-12">\
                            <a href="javascript: void(0)" data-id="'+next_id+'" class="btn btn-danger pull-right delete-organizational_experience" >\
                                <i class="fa fa-trash"></i>\
                            </a>\
                        </div>\
                    </div>\
                    <hr>\
                </div>');
                get_library();
            });

            $("#add-family_relationship").on("click", function(){
                var ids = $(".content-detail-family_relationship").map(function() {
                    return $(this).attr("data-id");
                }).get();
                
                var next_id =  Math.max.apply( Math, ids ) + 1;

                $(".body-detail-family_relationship").append('<div class="content-detail-family_relationship" style="margin-top:10px;" data-id="'+next_id+'" id="family_relationship_'+next_id+'">\
                                    <div class="row ">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Family Status: </label>\
                                                <select class="form-control select2" name="applicant['+next_id+'][status_keluarga]" id="status_keluarga_'+next_id+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_status_keluarga+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Fullname: </label>\
                                                <input type="text" name="applicant['+next_id+'][nama]" id="nama_'+next_id+'" placeholder="Name" class="form-control" data-validation="[NOTEMPTY]" value="" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Gender: </label>\
                                                <select class="form-control select2" name="applicant['+next_id+'][jenis_kelamin]" id="jenis_kelamin_'+next_id+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_jenis_kelamin+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Place Of Birth: </label>\
                                                <input type="text" name="applicant['+next_id+'][tempat_lahir]" id="tempat_lahir_'+next_id+'" placeholder="Place Of Birth" class="form-control"  data-validation="[NOTEMPTY]" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Date Of Birth: </label>\
                                                <input type="text" name="applicant['+next_id+'][tgl_lahir]" id="tgl_lahir_'+next_id+'" placeholder="Date Of Birth" class="form-control datetimepicker11"  data-validation="[NOTEMPTY]" " >\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Last Education: </label>\
                                                <select class="form-control select2" name="applicant['+next_id+'][pendidikan_terakhir]" id="pendidikan_terakhir_'+next_id+'" data-validation="[NOTEMPTY]">\
                                                    <option value="">Please Choose </option>\
                                                    '+list_education+'\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Position: </label>\
                                                <input type="text" name="applicant['+next_id+'][jabatan_pekerjaan]" id="jabatan_pekerjaan_'+next_id+'" placeholder="Position" class="form-control" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <div class="form-group">\
                                                <label>Companny Name: </label>\
                                                <input type="text" name="applicant['+next_id+'][perusahaan]" id="perusahaan_'+next_id+'" placeholder="Companny Name" class="form-control" data-validation="[NOTEMPTY]">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label>Description: </label>\
                                                <textarea  name="applicant['+next_id+'][keterangan]" id="keterangan_'+next_id+'" placeholder="Description" class="form-control summernote" ></textarea>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row" id="button-remove-'+next_id+'">\
                                        <div class="col-md-12">\
                                            <a href="javascript: void(0)" data-id="'+next_id+'" class="btn btn-danger pull-right delete-family_relationship" >\
                                                <i class="fa fa-trash"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                    <hr>\
                                </div>');
                get_library();
            });

            
            $("#add-achievement").on("click", function(){
                var ids = $(".content-detail-achievement").map(function() {
                    return $(this).attr("data-id");
                }).get();
                
                var next_id =  Math.max.apply( Math, ids ) + 1;

                $(".body-detail-achievement").append('<div class="content-detail-achievement" style="margin-top:10px;" data-id="'+next_id+'" id="achievement_'+next_id+'">\
                        <div class="row ">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Award Name: </label>\
                                    <input type="text" name="applicant['+next_id+'][award_name]" id="award_name_'+next_id+'" placeholder="Name" class="form-control" data-validation="[NOTEMPTY]"  >\
                                </div>\
                            </div>\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Award Year: </label>\
                                    <input type="text" name="applicant['+next_id+'][year]" id="year_'+next_id+'" placeholder="Award Year" class="form-control datetimepicker12" data-validation="[NOTEMPTY]"  >\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Skala: </label>\
                                    <select class="form-control select2" name="applicant['+next_id+'][level_scope]" id="level_scope_'+next_id+'">\
                                        <option value="">Please Choose </option>\
                                        '+list_level_scope+'\
                                    </select>\
                                </div>\
                            </div>\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Category: </label>\
                                    <select class="form-control select2" name="applicant['+next_id+'][stream]" id="stream_'+next_id+'">\
                                        <option value="">Please Choose </option>\
                                        '+list_stream+'\
                                    </select>\
                                </div>\
                            </div>\
                         </div>\
                        <div class="row" id="button-remove-'+next_id+'">\
                            <div class="col-md-12">\
                                <a href="javascript: void(0)" data-id="'+next_id+'" class="btn btn-danger pull-right delete-achievement" >\
                                    <i class="fa fa-trash"></i>\
                                </a>\
                            </div>\
                        </div>\
                        <hr>\
                    </div>');
                get_library();
            });            

            $("#add-skill").on("click", function(){
                var ids = $(".content-detail-skill").map(function() {
                    return $(this).attr("data-id");
                }).get();
                
                var next_id =  Math.max.apply( Math, ids ) + 1;

                $(".body-detail-skill").append('<div class="content-detail-skill" style="margin-top:10px;" data-id="'+next_id+'" id="skill_'+next_id+'">\
                        <div class="row ">\
                            <div class="col-md-6">\
                                <div class="form-group">\
                                    <label>Skill Name: </label>\
                                    <select class="form-control select2" name="applicant['+next_id+'][keterampilan_id]" id="keterampilan_id_'+next_id+'">\
                                        <option value="">Please Choose </option>\
                                        '+list_keterampilan+'\
                                    </select>\
                                </div>\
                            </div>\
                            <div class="col-md-2">\
                                <div class="form-group">\
                                    <label>Rating: </label>\
                                    <select class="form-control rating" name="applicant['+next_id+'][rating]" id="rating_'+next_id+'">\
                                        <option value="">Please Choose </option>\
                                        '+list_rating+'\
                                    </select>\
                                </div>\
                            </div>\
                            <div class="col-md-3">\
                                <div class="form-group">\
                                    <label>Year: </label>\
                                    <select class="form-control select2" name="applicant['+next_id+'][skill_years]" id="skill_years_'+next_id+'">\
                                        <option value="">Please Choose </option>\
                                        '+list_skill_years+'\
                                    </select>\
                                </div>\
                            </div>\
                        </div>\
                        <hr>\
                        <div class="row" id="button-remove-'+next_id+'">\
                            <div class="col-md-12">\
                                <a href="javascript: void(0)" data-id="'+next_id+'" class="btn btn-danger pull-right delete-skill" >\
                                    <i class="fa fa-trash"></i>\
                                </a>\
                            </div>\
                        </div>\
                        <hr>\
                    </div>');
                get_library();
            });



            $("#form-personal-information").validate({
                submit: {
                    dynamic: {
                        settings: {
                            trigger: [
                                "focusout", "keydown",
                                "keypress", "keyup"
                            ]
                        }
                    },
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/personal_information_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-personal-information').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success");
                                }else{
                                swal({ 
                                   title: "Notification",       
                                   text: data.reason
                                  });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });

            $("#form-education").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/education_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-education').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success"); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });            

            $("#form-experience").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/experience_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-experience').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success"); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });

            $("#form-organizational_experience").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/organizational_experience_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-organizational_experience').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success"); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });

            $("#form-family_relationship").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/family_relationship_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-family_relationship').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success"); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });  

            $("#form-self_description").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/self_description_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-self_description').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success"); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });            

            $("#form-others").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/others_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-others').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success"); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });

            $("#form-achievement").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/achievement_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-achievement').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal("Good job!", data.reason, "success");
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });

            $("#form-skill").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    

                            $.ajax({
                                url: '{base_url}/skill_save',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-skill').serialize(),
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal({ 
                                   title: "Notification",       
                                   text: data.reason
                                  },
                                  function(){
                                }); 
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }      
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });


            $("#form-other_documents").validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger',
                        scrollToError: {
                            offset: -100,
                            duration: 500
                        }
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();    
                        },
                        onSubmit: function (node) {
                            NProgress.start();    
                            var form = document.getElementById('form-other_documents');
                            var formData = new FormData(form);
                            $.ajax({
                                url: '{base_url}/other_documents_save',
                                type: 'POST',
                                dataType: 'json',
                                // data: $('#form-other_documents').serialize(),
                                data: formData,
                                processData: false,
                                contentType: false
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                swal({ 
                                   title: "Notification",       
                                   text: data.reason
                                  },
                                  function(){
                                });
                                   
                                }else{
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }    
                                
                                $(".file-reset").val("");
                                get_detail('other_documents');   
                                NProgress.done();    

                            })
                            .fail(function() {
                                NProgress.done();
                                swal({ 
                                   title: "Notification",       
                                   text: "Failed"
                                  });
                            });
                            
                        },
                        onError: function (error) {
                            toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        }
                    }
                },
                debug: true
            });

            $('.change-menu-detail').on('shown.bs.tab', function (e) {
                var detail = $(e.target).attr("data-target");
                var detail = detail.substring(1);
                $(".body-detail-education").html("");
                $(".body-detail-experience").html("");
                $(".body-detail-organizational_experience").html("");
                $(".body-detail-family_relationship").html("");
                $(".body-detail-achievement").html("");
                $(".body-detail-skill").html("");
                get_detail(detail);
                console.log(detail);
            });

       });
</script>

