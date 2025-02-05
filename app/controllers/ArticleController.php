<?php
require_once '../app/core/Controller.php';
require_once '../app/models/Article.php';
class ArticleController extends Controller {
    public function show() {
        $articleModel = new Article();
        $articles = $articleModel->getAll();
        $this->view('front/article', ['articles' => $articles]);
        
    }
}
?>
