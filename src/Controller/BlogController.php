<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/blog", name="blog_")
 */
class BlogController extends BaseController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles =  $articleRepository->findBy(['archived' => false]);

        return $this->render('blog/index.html.twig', compact('articles'));
    }

    /**
     * @Route("/show/{slug}", name="show")
     */
    public function show(Article $article)
    {
        if ($article->getArchived()) {
            $this->flashError('Article non trouvé !');
            return $this->redirectToRoute('blog_index');
        }
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        return $this->render('blog/show.html.twig', compact('article', 'user'));
    }
}
