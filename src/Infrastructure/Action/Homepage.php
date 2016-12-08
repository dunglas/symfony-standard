<?php

namespace Infrastructure\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Homepage
{
    private $twig;
    private $baseDir;

    /**
     * @param \Twig_Environment $twig    Services are automatically injected, just typehint what you need, 0 configuration required
     * @param string            $baseDir Configuration parameters are automatically injected too, take a look at app/config/services.yml
     */
    public function __construct(\Twig_Environment $twig, string $baseDir)
    {
        $this->twig = $twig;
        $this->baseDir = realpath($baseDir).DIRECTORY_SEPARATOR;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function __invoke(Request $request) : Response
    {
        // replace this example code with whatever you need
        return new Response($this->twig->render('default/index.html.twig', ['base_dir' => $this->baseDir]));
    }
}
