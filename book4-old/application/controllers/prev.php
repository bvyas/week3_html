$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$data=array(
				'email'=>$this->input->post('email'),
				'is_logged_in' => 1
				);
			$this->session->set_userdata($data);
			$this->load->model('book');
			// $books = $this->book->get_all();
			$array['books'] = $this->book->get_books();
			$array['comments'] = $this->book->get_comments();

			// $this->load->view('members', array('books' => $books));	
			$this->load->view('members',  $array);			
		}
		else
		{

			$this->load->view('index.php');		
		}












		$this->book->check($email, $password);
			if ($this->session->userdata('email') != NULL) {
				# code...
			

	    //  		$data=array(
					// 'email'=>$this->input->post('email'),
					// 'is_logged_in' => 1
					// );
				// $this->session->set_userdata($data);
				$this->load->model('book');
				// $this->book->can_log_in($data);
				// $books = $this->book->get_all();
				$array['books'] = $this->book->get_books();
				$array['comments'] = $this->book->get_comments();

				// $this->load->view('members', array('books' => $books));	
				$this->load->view('members', $array);	
			}

			else {
				redirect('/');
			}
	    }
	    else
	    {
	    $this->session->set_flashdata("login_error", "Invalid email or password!");
	      	redirect('/');
	    }