<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curiculum_vitae extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_Curiculum_vitae');
		$this->load->library('drop_down');
		$this->load->library('upload');

		if($this->session->userdata('is_logged_in') == false){
			redirect(base_url()."home");
		}
    }


    public function index(){
    	if($this->session->userdata('is_logged_in') == true){
			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);
			$detail 		=  $this->input->get('detail');

			$id =  $this->session->userdata('id');

			$this->load->library('page_render');

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=agama)');
			$list_agama = $this->drop_down->build();			


			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=jenis_kelamin)');
			$list_jenis_kelamin = $this->drop_down->build();

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=status_menikah)');
			$list_status_menikah = $this->drop_down->build();

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=level_scope)');
			$list_level_scope = $this->drop_down->build();

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_education');
			$this->drop_down->where();
			$list_education = $this->drop_down->build();			

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_stream');
			$this->drop_down->where();
			$list_stream = $this->drop_down->build();				

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_keterampilan');
			$this->drop_down->where();
			$list_keterampilan = $this->drop_down->build();		

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=skill_duration)');
			$list_skill_years = $this->drop_down->build();		

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=skill_rating)');
			$list_rating = $this->drop_down->build();			

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=status_keluarga)');
			$list_status_keluarga = $this->drop_down->build();

			$list_docs = $this->M_Curiculum_vitae->get_list_docs();


			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				'base'						=> base_url(),
				"tenant_id"					=> $this->session->userdata('tenant_id'),
				"email"						=> $this->session->userdata('email'),
				"foto"						=> $this->session->userdata('foto'),
				"fullname"					=> $this->session->userdata('fullname'),
				"detail"					=> $detail,
				"list_agama"				=> $list_agama,
				"list_jenis_kelamin"		=> $list_jenis_kelamin,
				"list_status_menikah"		=> $list_status_menikah,
				"list_education"			=> $list_education,
				"list_level_scope"			=> $list_level_scope,
				"list_stream"				=> $list_stream,
				"list_keterampilan"			=> $list_keterampilan,
				"list_skill_years"			=> $list_skill_years,
				"list_rating"				=> $list_rating,
				"list_status_keluarga"		=> $list_status_keluarga,
				"list_docs"					=> $list_docs

			);

			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
    }



    public function preview(){
    	    if($this->session->userdata('is_logged_in') == true){
			$parent_page	= $this->uri->segment(1);
			$page			= $this->uri->segment(2);
			$detail_pelamar = $this->input->post('pelamar_id');
			$pelamar_id 	= $this->session->userdata('id');
			
			$pelamar_id = $detail_pelamar!=""?$detail_pelamar:$pelamar_id;

			$userlevel 		= $this->session->userdata('userlevel');

			$this->load->library('page_render');
			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=skill_rating)');
			$list_rating = $this->drop_down->build();			

			$personal_information 	= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'm_pelamar' );
			$list_organisasi	 	= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'm_pelamar_organisasi' );
			$list_work	 			= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'm_pelamar_pekerjaan' );
			$list_skill 			= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'vw_rel_pelamar_keterampilan' );
			$list_education	 		= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'vw_rel_pelamar_education' );
			$list_keluarga	 		= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'vw_rel_pelamar_organisasi_education' );
			$list_prestasi	 		= $this->M_Curiculum_vitae->detail_data( $pelamar_id , 'vw_rel_pelamar_prestasi_stream' );

			$data=array(
				'page_content' 				=> $page,
				'parent_page' 				=> $parent_page,
				'base_url'					=> base_url().$page,
				'base'						=> base_url(),
				"tenant_id"					=> $this->session->userdata('tenant_id'),
				'list_rating'				=> $list_rating,
				'userlevel'					=> $userlevel,
				'email' 					=> $personal_information[0]['email'],//
				"foto"						=> $personal_information[0]['img_profile'],
				'no_ktp' 					=> $personal_information[0]['no_ktp'],
				'fullname'					=> $personal_information[0]['fullname'],//
				'nama_panggilan' 			=> $personal_information[0]['nama_panggilan'],
				'jenis_kelamin' 			=> $personal_information[0]['jenis_kelamin'],
				'alamat_domisili' 			=> $personal_information[0]['alamat_domisili'],
				'kota_domisili' 			=> $personal_information[0]['kota_domisili'],
				'alamat_ktp'				=> $personal_information[0]['alamat_ktp'],
				'agama' 					=> $personal_information[0]['agama'],
				'tempat_lahir' 				=> $personal_information[0]['tempat_lahir'],
				'tgl_lahir' 				=> $personal_information[0]['tgl_lahir'],
				'no_npwp' 					=> $personal_information[0]['no_npwp'],
				'no_jamsostek' 				=> $personal_information[0]['no_jamsostek'],
				'kode_pos' 					=> $personal_information[0]['kode_pos'],
				'phone' 					=> $personal_information[0]['phone'],
				'status_menikah' 			=> $personal_information[0]['status_menikah'],
				'kewarganegaraan' 			=> $personal_information[0]['kewarganegaraan'],
				'no_sima' 					=> $personal_information[0]['no_sima'],
				'no_simc' 					=> $personal_information[0]['no_simc'],
				'skype'						=> $personal_information[0]['skype'],
				'linkedin'					=> $personal_information[0]['linkedin'],
				'facebook'					=> $personal_information[0]['facebook'],
				'twitter'					=> $personal_information[0]['twitter'],
				'instagram'					=> $personal_information[0]['instagram'],
				'github'					=> $personal_information[0]['github'],
				'gaji_diharapkan' 			=> "IDR ".strrev(implode('.',str_split(strrev(strval($personal_information[0]['gaji_diharapkan'])),3))),
				'fasilitas' 				=> $personal_information[0]['fasilitas'], 
				'mulai_bekerja' 			=> $personal_information[0]['mulai_bekerja'],
				'profil_diri' 				=> $personal_information[0]['profil_diri'],
				'lembur' 					=> $personal_information[0]['lembur']=="1"?"Ready":"Not Ready", 
				'tugas_luar_kota' 			=> $personal_information[0]['tugas_luar_kota']=="1"?"Ready":"Not Ready", 
				'ditempatkan_luar_kota' 	=> $personal_information[0]['ditempatkan_luar_kota']=="1"?"Ready":"Not Ready", 
				'pekerjaan_disukai_sifat'	=> $personal_information[0]['pekerjaan_disukai_sifat'], 
				'pekerjaan_disukai_bidang' 	=> $personal_information[0]['pekerjaan_disukai_bidang'], 
				'pekerjaan_tidak_sifat' 	=> $personal_information[0]['pekerjaan_tidak_sifat'], 
				'pekerjaan_tidak_bidang' 	=> $personal_information[0]['pekerjaan_tidak_bidang'], 
				'list_skill'				=> $list_skill,
				'list_work'					=> $list_work,
				'list_education'			=> $list_education,
				'list_organisasi'			=> $list_organisasi,
				'list_keluarga'				=> $list_keluarga,
				'list_prestasi'				=> $list_prestasi,
				'check_skill'				=> (!empty($list_skill)) ? "1" : "0",
				'check_work'				=> (!empty($list_work)) ? "1" : "0",
				'check_education'			=> (!empty($list_education)) ? "1" : "0",
				'check_organisasi'			=> (!empty($list_organisasi)) ? "1" : "0",
				'check_family'				=> (!empty($list_keluarga)) ? "1" : "0",
				'check_prestasi'			=> (!empty($list_prestasi)) ? "1" : "0"
			);

			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
    }


    public function download_cv(){

	    $data = array(
	        "dataku" => array(
	            "nama" => "Petani Kode",
	            "url" => "http://petanikode.com"
	        )
	    );

	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "CV_ONLINE.pdf";
	    $this->pdf->load_view('download_cv', $data);
	}



    public function personal_information(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar';
		$personal_information = $this->M_Curiculum_vitae->detail_data( $id ,$table );
		
		$detail_data = array( 
			'id' 				=> $personal_information[0]['id'],
			'email' 			=> $personal_information[0]['email'],
			'no_ktp' 			=> $personal_information[0]['no_ktp'],
			'fullname'			=> $personal_information[0]['fullname'],
			'nama_panggilan' 	=> $personal_information[0]['nama_panggilan'],
			'jenis_kelamin' 	=> $personal_information[0]['jenis_kelamin'],
			'alamat_domisili' 	=> $personal_information[0]['alamat_domisili'],
			'kota_domisili' 	=> $personal_information[0]['kota_domisili'],
			'alamat_ktp'		=> $personal_information[0]['alamat_ktp'],
			'agama' 			=> $personal_information[0]['agama'],
			'tempat_lahir' 		=> $personal_information[0]['tempat_lahir'],
			'tgl_lahir' 		=> $personal_information[0]['tgl_lahir'],
			'usia' 				=> $personal_information[0]['usia'],
			'usia_bulan' 		=> $personal_information[0]['usia_bulan'],
			'usia_hari' 		=> $personal_information[0]['usia_hari'],
			'no_npwp' 			=> $personal_information[0]['no_npwp'],
			'no_jamsostek' 		=> $personal_information[0]['no_jamsostek'],
			'kode_pos' 			=> $personal_information[0]['kode_pos'],
			'phone' 			=> $personal_information[0]['phone'],
			'status_menikah' 	=> $personal_information[0]['status_menikah'],
			'kewarganegaraan' 	=> $personal_information[0]['kewarganegaraan'],
			'no_sima' 			=> $personal_information[0]['no_sima'],
			'no_simc' 			=> $personal_information[0]['no_simc'],
			'skype'				=> $personal_information[0]['skype'],
			'linkedin'			=> $personal_information[0]['linkedin'],
			'facebook'			=> $personal_information[0]['facebook'],
			'twitter'			=> $personal_information[0]['twitter'],
			'instagram'			=> $personal_information[0]['instagram'],
			'github'			=> $personal_information[0]['github']
		 );
		 echo json_encode($detail_data);
    }      

    
    public function personal_information_save(){
    	$pelamar_id = $this->session->userdata('id');
		$detail_data = array( 
			'email' 			=> $this->input->post('email'),
			'no_ktp' 			=> $this->input->post('no_ktp'),
			'fullname'			=> $this->input->post('fullname'),
			'nama_panggilan' 	=> $this->input->post('nama_panggilan'),
			'jenis_kelamin' 	=> $this->input->post('jenis_kelamin'),
			'alamat_domisili' 	=> $this->input->post('alamat_domisili'),
			'kota_domisili' 	=> $this->input->post('kota_domisili'),
			'alamat_ktp'		=> $this->input->post('alamat_ktp'),
			'agama' 			=> $this->input->post('agama'),
			'tempat_lahir' 		=> $this->input->post('tempat_lahir'),
			'tgl_lahir' 		=> $this->input->post('tgl_lahir'),
			'no_npwp' 			=> $this->input->post('no_npwp'),
			'no_jamsostek' 		=> $this->input->post('no_jamsostek'),
			'kode_pos' 			=> $this->input->post('kode_pos'),
			'phone' 			=> $this->input->post('phone'),
			'status_menikah' 	=> $this->input->post('status_menikah'),
			'kewarganegaraan' 	=> $this->input->post('kewarganegaraan'),
			'no_sima' 			=> $this->input->post('no_sima'),
			'no_simc' 			=> $this->input->post('no_simc'),
			'skype'				=> $this->input->post('skype_id'),
			'linkedin'			=> $this->input->post('linkedin'),
			'facebook'			=> $this->input->post('facebook'),
			'twitter'			=> $this->input->post('twitter'),
			'instagram'			=> $this->input->post('instagram'),
			'github'			=> $this->input->post('github')
		 );
		
		$update_personal = $this->M_Curiculum_vitae->update_pelamar( $detail_data, $pelamar_id );
		echo json_encode($update_personal);
    }

    																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
    public function education(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar_education';
		$education = $this->M_Curiculum_vitae->detail_data( $id , $table );
		
		echo json_encode($education);
    }    

    public function education_save(){
    	$pelamar_id = $this->session->userdata('id');
     	$data = $this->input->post('applicant');
     	$table = 'm_pelamar_education';

     	foreach ($data as $key => $value) {
     		$data_fix[] = array (
					'pelamar_id' 				=> $pelamar_id,
					'jenjang_pendidikan' 		=> $value['education_level'],
					'nama_jenjang_pendidikan' 	=> $value['university'],
					'jurusan' 		  			=> $value['major'],
					'current_gpa' 	  			=> $value['current_gpa'],
					'score_gpa' 				=> $value['score_gpa'],
					'tahun_mulai' 				=> $value['education_date_start'],
					'tahun_selesai' 			=> $value['education_date_end']
     		);
     	}
     	$update_education = $this->M_Curiculum_vitae->update_data( $pelamar_id, $data_fix , $table );

		echo json_encode($update_education);
    }    

    public function experience(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar_pekerjaan';
		$experience = $this->M_Curiculum_vitae->detail_data( $id , $table );
		
		echo json_encode($experience);
    }    

    public function experience_save(){

		$pelamar_id = $this->session->userdata('id');
     	$data = $this->input->post('applicant');
     	$table = 'm_pelamar_pekerjaan';

     	foreach ($data as $key => $value) {
     		$data_fix[] = array (
					'pelamar_id' 			=> $pelamar_id,
					'nama_perusahaan'		=> $value['nama_perusahaan'],
					'jabatan'				=> $value['jabatan'],
					'alamat_perusahaan'		=> $value['alamat_perusahaan'],
					'date_start'			=> $value['date_start'],
					'date_end'				=> isset($value['date_end'])!=""?$value['date_end']:"",
					'current_date'			=> isset($value['current_date'])!=""?$value['current_date']:"0",
					'deskripsi_pekerjaan'	=> $value['deskripsi'],
					'gaji' 					=> $value['gaji'],
					// 'pencapaian_prestasi'	=> $value['pencapaian_prestasi'],
					'alasan_berhenti'		=> $value['alasan_berhenti'],
					'fasilitas'				=> $value['fasilitas'],
					'rekomendasi'			=> $value['rekomendasi'],
					'kontak_rekomendasi'	=> $value['kontak_rekomendasi']

     		);
     	}
     	$update_education = $this->M_Curiculum_vitae->update_data( $pelamar_id, $data_fix , $table );

		echo json_encode($update_education);
		 
    }    

    public function organizational_experience(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar_organisasi';
		$organizational_experience = $this->M_Curiculum_vitae->detail_data( $id , $table );
		echo json_encode($organizational_experience);
    }    

    public function organizational_experience_save(){
		$pelamar_id = $this->session->userdata('id');
     	$data = $this->input->post('applicant');
     	$table = 'm_pelamar_organisasi';

     	foreach ($data as $key => $value) {
     		$data_fix[] = array (
					'pelamar_id' 			=> $pelamar_id,
					'nama_organisasi'		=> $value['nama_organisasi'],
					'tempat'				=> $value['tempat'],
					'sifat_organisasi'		=> $value['sifat_organisasi'],
					'jabatan'				=> $value['jabatan'],
					// 'lama_menjabat'			=> $value['lama_menjabat'],
					'date_start'			=> $value['date_start'],
					'date_end'				=> $value['date_end']
     		);
     	}
     	$update_education = $this->M_Curiculum_vitae->update_data( $pelamar_id, $data_fix , $table );

		echo json_encode($update_education);
		 
    }    

    public function family_relationship(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar_keluarga';
		$family_relationship = $this->M_Curiculum_vitae->detail_data( $id , $table );
		echo json_encode($family_relationship);
    }    

    public function family_relationship_save(){
		$pelamar_id = $this->session->userdata('id');
     	$data = $this->input->post('applicant');
     	$table = 'm_pelamar_keluarga';

     	foreach ($data as $key => $value) {
     		$data_fix[] = array (
					'pelamar_id' 			=> $pelamar_id,
					'status_keluarga' 		=> $value['status_keluarga'],
					'nama' 					=> $value['nama'],
					'jenis_kelamin' 		=> $value['jenis_kelamin'],
					'tempat_lahir' 			=> $value['tempat_lahir'],
					'tgl_lahir' 			=> $value['tgl_lahir'],
					'pendidikan_terakhir' 	=> $value['pendidikan_terakhir'],
					'jabatan_pekerjaan' 	=> $value['jabatan_pekerjaan'],
					'perusahaan' 			=> $value['perusahaan'],
					'jabatan_pekerjaan' 	=> $value['jabatan_pekerjaan'],
					'keterangan' 			=> $value['keterangan']
     		);
     	}
     	$update_education = $this->M_Curiculum_vitae->update_data( $pelamar_id, $data_fix , $table );

		echo json_encode($update_education);
		 
    }

    public function self_description(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar';
		$self_description = $this->M_Curiculum_vitae->detail_data( $id ,$table );
		
		$detail_data = array( 
			'id' 						=> $self_description[0]['id'],
			'profil_diri'				=> $self_description[0]['profil_diri'],
			'kualifikasi'				=> $self_description[0]['kualifikasi'],
			'keterampilan'				=> $self_description[0]['keterampilan'],
			'kegiatan'					=> $self_description[0]['kegiatan'],
			'prestasi'					=> $self_description[0]['prestasi'],
			'publikasi'					=> $self_description[0]['publikasi'],
			'anggota_profesional'		=> $self_description[0]['anggota_profesional']
		 );

		 echo json_encode($detail_data);
    }      

    
    public function self_description_save(){
    	$pelamar_id =  $this->session->userdata('id');
		$detail_data = array( 
			'profil_diri' 			=> $this->input->post('profil_diri'),
			'kualifikasi' 			=> $this->input->post('kualifikasi'),
			'keterampilan' 			=> $this->input->post('keterampilan'),
			'kegiatan' 				=> $this->input->post('kegiatan'),
			'prestasi'				=> $this->input->post('prestasi'),
			'publikasi'				=> $this->input->post('publikasi'),
			'anggota_profesional'  	=> $this->input->post('anggota_profesional')
		 );

		$update_self_description = $this->M_Curiculum_vitae->update_pelamar( $detail_data, $pelamar_id );
		// print_r($detail_data);
		echo json_encode($update_self_description);
    }


    public function skill(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar_keterampilan';
		$skill = $this->M_Curiculum_vitae->detail_data( $id , $table );
		echo json_encode($skill);
    }    

    public function skill_save(){
    	$pelamar_id =  $this->session->userdata('id');
		$table = 'm_pelamar_keterampilan';
     	$data = $this->input->post('applicant');
     	foreach ($data as $key => $value) {
     		$data_fix[] = array (
					'pelamar_id' 		=> $pelamar_id,
					'keterampilan_id' 	=> $value['keterampilan_id'],
					'rating' 			=> $value['rating'],
					'skill_years' 		=> $value['skill_years']
     		);
     	}
     	$update_skill = $this->M_Curiculum_vitae->update_data( $pelamar_id, $data_fix , $table );
		// print_r($data_fix);
		echo json_encode($update_skill);
		 
    }       


    public function achievement(){
		$id =  $this->session->userdata('id');
		$table = 'm_pelamar_prestasi';
		$achievement = $this->M_Curiculum_vitae->detail_data( $id , $table );
		
		echo json_encode($achievement);
    }    

    public function achievement_save(){
    	$pelamar_id =  $this->session->userdata('id');
     	$data = $this->input->post('applicant');
		$table = 'm_pelamar_prestasi';

     	foreach ($data as $key => $value) {
     		$data_fix[] = array (
					'pelamar_id' 	=> $pelamar_id,
					'award_name' 	=> $value['award_name'],
					'year' 			=> $value['year'],
					'level_scope' 	=> $value['level_scope'],
					'stream' 		=> $value['stream']
     		);
     	}

     	$update_achievement = $this->M_Curiculum_vitae->update_data( $pelamar_id, $data_fix , $table );
		// print_r($data_fix);
		echo json_encode($update_achievement);
		 
    }   

    public function others(){
    	$id =  $this->session->userdata('id');
		$table = 'm_pelamar';
		$personal_information = $this->M_Curiculum_vitae->detail_data( $id ,$table );
		$detail_data = array( 
				'lembur' 					=> $personal_information[0]['lembur'], 
				'tugas_luar_kota' 			=> $personal_information[0]['tugas_luar_kota'], 
				'ditempatkan_luar_kota' 	=> $personal_information[0]['ditempatkan_luar_kota'], 
				'pekerjaan_disukai_sifat'	=> $personal_information[0]['pekerjaan_disukai_sifat'], 
				'pekerjaan_disukai_bidang' 	=> $personal_information[0]['pekerjaan_disukai_bidang'], 
				'pekerjaan_tidak_sifat' 	=> $personal_information[0]['pekerjaan_tidak_sifat'], 
				'pekerjaan_tidak_bidang' 	=> $personal_information[0]['pekerjaan_tidak_bidang'], 
				'gaji_diharapkan' 			=> $personal_information[0]['gaji_diharapkan'], 
				'fasilitas' 				=> $personal_information[0]['fasilitas'], 
				'mulai_bekerja' 			=> $personal_information[0]['mulai_bekerja']
		 );
		// print_r($detail_data);
		 echo json_encode($detail_data);
    }

    public function others_save(){

    	$pelamar_id =  $this->session->userdata('id');
		$detail_data = array( 
			'lembur' 					=> $this->input->post('lembur'),
			'tugas_luar_kota' 			=> $this->input->post('tugas_luar_kota'),
			'ditempatkan_luar_kota' 	=> $this->input->post('ditempatkan_luar_kota'),
			'pekerjaan_disukai_sifat'	=> $this->input->post('pekerjaan_disukai_sifat'),
			'pekerjaan_disukai_bidang' 	=> $this->input->post('pekerjaan_disukai_bidang'),
			'pekerjaan_tidak_sifat'	 	=> $this->input->post('pekerjaan_tidak_sifat'),
			'pekerjaan_tidak_bidang' 	=> $this->input->post('pekerjaan_tidak_bidang'),
			'lembur' 					=> $this->input->post('lembur'),
			'gaji_diharapkan' 			=> $this->input->post('gaji_diharapkan'),
			'fasilitas' 				=> $this->input->post('fasilitas'),
			'mulai_bekerja' 			=> $this->input->post('mulai_bekerja')
		 );
		$update_others = $this->M_Curiculum_vitae->update_pelamar( $detail_data, $pelamar_id );

		// print_r($detail_data);
		 echo json_encode($update_others);
    }

    public function other_documents(){
    	$id =  $this->session->userdata('id');
		$table = 'm_pelamar_file';
		$other_documents = $this->M_Curiculum_vitae->detail_data( $id , $table );
		
		echo json_encode($other_documents);
    }

    public function other_documents_save(){
    	$file_id 			= $this->input->post('file_id');
		$table 			= "m_pelamar_file";
		$pelamar_id 	= $this->session->userdata('id');
		$upd			= $this->session->userdata('email');
		$lup			= date("Y-m-d H:i:s");
		
		$path 			= str_replace('\\','/', APPPATH)."";
		$path 			= str_replace('application','assets/backend/documents',$path);
		$directory 		= 'pelamar/';
		$user_create 	= $pelamar_id.'/';

		!is_dir($path.$directory.$user_create)?mkdir($path.$directory.$user_create,0777,TRUE):'';
		$final_path = $path.$directory.$user_create;

    	foreach ($file_id as $key => $value) {
		 		$max_size 			= $this->input->post('max_size_'.$value.'');
    			$allowed_types 		= $this->input->post('allowed_types_'.$value.'');
    			$file_title 		= $this->input->post('file_title_'.$value.'');
    			$file_ext 			= pathinfo($_FILES['file_name_'.$value.'']["name"], PATHINFO_EXTENSION);
		 	
		 	if ($_FILES['file_name_'.$value.'']['name'] != '' ) {

    			$pelamar_docs = $this->M_Curiculum_vitae->detail_data_file($pelamar_id, $table ,$value );

    			if (isset($pelamar_docs[0]['filename'])) {
    				unlink($final_path.$pelamar_docs[0]['filename']);
    			}

    			$config[$value]['file_name']		= $file_title."_".$pelamar_id.".".$file_ext;
				$config[$value]['upload_path'] 		= $final_path;
				$config[$value]['allowed_types'] 	= $allowed_types;
				$config[$value]['max_size']		 	= $max_size;

				$allowed_types 	= '';
				$max_size 		= '';

				$this->upload->initialize( $config[$value] );
				if($this->upload->do_upload('file_name_'.$value.'')){
					$file_id 		= $value;
					$file_name		= $this->upload->data('file_name');
					$data_fix = array (
							'file_id' 		=> $file_id,
							'pelamar_id' 	=> $pelamar_id,
							'filename' 		=> $file_name,
							'filepath' 		=> $final_path,
							'doc_type' 		=> "",
							'upload_date' 	=> $lup,
							'uploader' 		=> $upd,
							'created' 		=> $upd,
							'create_at' 	=> $lup
		     		);
				}else{
					$data_fix = array();
					print_r( $this->upload->display_errors() );
					exit();
				}

				if (isset($pelamar_docs[0]['filename'])) {
					if (!empty(array_filter($data_fix))){
			    		$update_documents = $this->M_Curiculum_vitae->update_file( $pelamar_id , $data_fix , $table , $value );
			    	}
				}else{
			    		$update_documents = $this->M_Curiculum_vitae->add_file( $data_fix , $table );
				}

				// $data[] = array(
				// 				'max_size' => $max_size,
				// 				'allowed_types' => $allowed_types,
				// 				'file_title' => $file_title,
				// 				'file_ext' => $file_ext,
				// 		);


		 	}
    	}

    // 	print_r($data);
				// exit();

    	
		echo json_encode($update_documents);
    }

}