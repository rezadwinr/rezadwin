<?php
class Blog_model{
    private $blog = [
        [
            "penulis" => "Pelajar RPl",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "View"
        ],
        [
            "penulis" => "Pelajar RPl",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "View"
        ],
        [
            "penulis" => "Pelajar RPl",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "View"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
    
}