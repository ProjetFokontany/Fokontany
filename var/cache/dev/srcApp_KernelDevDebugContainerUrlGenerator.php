<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'appartement.liste' => array(array(), array('_controller' => 'App\\Controller\\AppartementController::index'), array(), array(array('text', '/appartement')), array(), array()),
        'commune.liste' => array(array(), array('_controller' => 'App\\Controller\\CommuneController::index'), array(), array(array('text', '/commune')), array(), array()),
        'fokontany.liste' => array(array(), array('_controller' => 'App\\Controller\\FokontanyController::index'), array(), array(array('text', '/fokontany')), array(), array()),
        'foyer.liste' => array(array(), array('_controller' => 'App\\Controller\\FoyerController::index'), array(), array(array('text', '/foyer')), array(), array()),
        'individu.liste' => array(array(), array('_controller' => 'App\\Controller\\IndividuController::index'), array(), array(array('text', '/individu')), array(), array()),
        'app_individu_create' => array(array(), array('_controller' => 'App\\Controller\\IndividuController::create'), array(), array(array('text', '/individu/create/')), array(), array()),
        'quartier.liste' => array(array(), array('_controller' => 'App\\Controller\\QuartierController::index'), array(), array(array('text', '/quartier')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/')), array(), array()),
        'forgotpasword' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::forgotPassword'), array(), array(array('text', '/forgotPassword')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\PagesController::home'), array(), array(array('text', '/accueil')), array(), array()),
        'individu' => array(array(), array('_controller' => 'App\\Controller\\IndividuController::index'), array(), array(array('text', '/individu')), array(), array()),
        'individuCreate' => array(array(), array('_controller' => 'App\\Controller\\IndividuController::create'), array(), array(array('text', '/individu/create')), array(), array()),
        'individuList' => array(array(), array('_controller' => 'App\\Controller\\IndividuController::list'), array(), array(array('text', '/individu/list')), array(), array()),
        'foyer' => array(array(), array('_controller' => 'App\\Controller\\FoyerController::index'), array(), array(array('text', '/foyer')), array(), array()),
        'foyerCreate' => array(array(), array('_controller' => 'App\\Controller\\FoyerController::create'), array(), array(array('text', '/foyer/create')), array(), array()),
        'foyerList' => array(array(), array('_controller' => 'App\\Controller\\FoyerController::list'), array(), array(array('text', '/foyer/list')), array(), array()),
        'appartement' => array(array(), array('_controller' => 'App\\Controller\\AppartementController::index'), array(), array(array('text', '/appartement')), array(), array()),
        'appartementCreate' => array(array(), array('_controller' => 'App\\Controller\\AppartementController::create'), array(), array(array('text', '/appartement/create')), array(), array()),
        'appartementList' => array(array(), array('_controller' => 'App\\Controller\\AppartementController::list'), array(), array(array('text', '/appartement/list')), array(), array()),
        'quartier' => array(array(), array('_controller' => 'App\\Controller\\QuartierController::index'), array(), array(array('text', '/qaurtier')), array(), array()),
        'quartierCreate' => array(array(), array('_controller' => 'App\\Controller\\QuartierController::create'), array(), array(array('text', '/quartier/create')), array(), array()),
        'quartierList' => array(array(), array('_controller' => 'App\\Controller\\QuartierController::list'), array(), array(array('text', '/quartier/list')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
