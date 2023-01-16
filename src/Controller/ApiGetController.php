<?php

namespace App\Controller;

use App\Repository\DataMatchRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ApiGetController extends AbstractController
{
    #[Route('/api/get', name: 'api_get_index', methods: 'GET')]
    public function index(DataMatchRepository $matchRepository ,UserRepository $user): Response
    {
        $posts = $matchRepository->findAll();



      //  $postsNormalizes = $normalizer->normalize($posts);
      //  $json =json_encode($postsNormalizes);

       // $json = $serializer->serialize($posts, 'json' );


      //  $response = new Response($json, 200, [
      //      "Content-Type" => "application/json"
      //  ]);

       // $response = new JsonResponse($json, 200, [], true);

        return $this->json($posts, 200, []);
    }

}
