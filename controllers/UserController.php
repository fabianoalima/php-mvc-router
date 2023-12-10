<?php

class UserController {
    
    public function index() {
        echo "Home Controller";
    }
    
    public function show($id) {
        echo "UserId: " . $id[0];
    }
}
