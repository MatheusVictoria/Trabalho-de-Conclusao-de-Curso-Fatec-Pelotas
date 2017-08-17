<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Turma extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/login');
        }
        $this->load->model('Turma_Model', 'turmaM');
        $this->load->model('Centro_de_Treinamento_Model', 'ctM');
        $this->load->model('Professor_Model', 'professorM');
    }
    
    public function index(){
        
        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('horario', 'Horário', 'trim|required', array('required' => 'Preencha o campo horário'));
     
        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<br/><li>', '</li>');
        } else {
            $this->turmaM->inserir($dados);
            redirect('listar_turma');
        }

        $dados['ct'] = $this->ctM->selecionar();
        $dados['professor'] = $this->professorM->selecionar();
        $this->load->view('form_turma', $dados);
        $this->load->view('templates/footer');
        
        
    }
    
    
}
