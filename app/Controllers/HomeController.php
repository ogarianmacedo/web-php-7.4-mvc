<?php

namespace App\Controllers;

use App\Config\Request;
use App\Repository\InfoRepository;
use App\Models\Mensagem;
use App\Repository\MensagemRepository;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends BaseController
{
    /**
     * @var InfoRepository
     */
    private InfoRepository $infoRepository;

    /**
     * @var MensagemRepository
     */
    private MensagemRepository $mensagemRepository;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->infoRepository = new InfoRepository();
        $this->mensagemRepository = new MensagemRepository();
    }

    public function index()
    {
        $this->render('index');
    }

    public function sobre()
    {
        $infos = $this->infoRepository->getAll();
        $this->render('sobre', $infos);
    }

    public function mensagem()
    {
        $this->render('mensagem');
    }

    /**
     * @param Request $request
     */
    public function salvarMensagem(Request $request)
    {
        $mensagem = new Mensagem();
        $mensagem->setNome($request->params['nome']);
        $mensagem->setEmail($request->params['email']);
        $mensagem->setMensagem($request->params['mensagem']);

        $result = $this->mensagemRepository->save($mensagem);
        $this->renderJson($result);
    }
}