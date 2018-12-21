<?php

class User_Profile extends CI_Controller {

    public function my_wiki_posts() {

        $this->load->view('user/my_wiki_posts');

    }

    public function my_articles() {

        $this->load->view('user/my_articles');

    }

    public function my_forum_posts() {

        $this->load->view('user/my_forum_posts');

    }

}