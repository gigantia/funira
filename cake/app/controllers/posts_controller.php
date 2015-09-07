<?php

class PostsController extends AppController{

	var $name = "Posts";
	var $layout = 'default';
	
	function index(){
		$this->set('title_for_layout', 'ポータルNew Open!');

		$this->set("posts", $this->Post->find("all"));
	}
	
	function view($id = null){
		$this->set('title_for_layout', 'ポータル');
		
		$this->Post->id = $id;
		$this->set("post", $this->Post->read());
	}
	
	function add(){
		$this->set('title_for_layout', 'ポータル');
		
		if( !empty($this->data) ){
			if( $this->Post->save( $this->data ) ){
				$this->flash("Your post has been saved.","/posts");
			}
		}
	}
	
	function delete($id) {
		//削除関数がCakePHP1.3からdeleteに変わったらしい。
		$this->Post->delete($id);
		$this->flash('The post with id: '.$id.' has been deleted.', '/posts');
	}
	
	function edit($id = null) {
		$this->set('title_for_layout', 'ポータル');
		
		$this->Post->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Post->read();
		}
		else {
			//var_dump($this->data['Post']);
			
			if ($this->Post->save($this->data['Post'])) {
				$this->flash('Your post has been updated.','/posts');
			}
		}
	}
}



?>