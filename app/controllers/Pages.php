<?php
   
   class Pages extends Controller {
      public function __construct(){

      }

      public function index(){
         if(isLoggedIn()){
            redirect('posts');
         }
         $data =  [
            'title' => 'Shareposts',
            'description' => 'Simple social network built the Traversy MVC PHP framework'
         ];
         $this->view('pages/index', $data);
      }
      public function about(){
         $data =  [
            'title' => 'About',
            'description' => 'Website to share post with other users'
         ];
         $this->view('pages/about', $data);
      }
   }