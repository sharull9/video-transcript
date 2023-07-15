<?php

namespace App\Controllers;

use App\Models\BookmarkModel;
use App\Models\MemberModel;
use App\Models\MinistryModel;
use App\Models\PartyModel;
use App\Models\PlaylistModel;
use App\Models\PlaylistVideoModel;
use App\Models\PortfolioModel;
use App\Models\UserModel;
use App\Models\VideoModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    public $userModel, $videoModel, $bookmarkModel, $playlistModel, $playlistVideoModel, $ministryModel, $portfolioModel, $partyModel, $memberModel;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['video'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $this->userModel = new UserModel();
        $this->bookmarkModel = new BookmarkModel();
        $this->videoModel = new VideoModel();
        $this->playlistModel = new PlaylistModel();
        $this->playlistVideoModel = new PlaylistVideoModel();
        $this->ministryModel = new MinistryModel();
        $this->portfolioModel = new PortfolioModel();
        $this->partyModel = new PartyModel();
        $this->memberModel = new MemberModel();

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
}
