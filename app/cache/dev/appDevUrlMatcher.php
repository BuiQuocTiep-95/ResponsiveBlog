<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/1fec440')) {
                // _assetic_1fec440
                if ($pathinfo === '/js/1fec440.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1fec440',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1fec440',);
                }

                // _assetic_1fec440_0
                if ($pathinfo === '/js/1fec440_addTag_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1fec440',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1fec440_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/c545447')) {
                // _assetic_c545447
                if ($pathinfo === '/js/c545447.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c545447',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c545447',);
                }

                // _assetic_c545447_0
                if ($pathinfo === '/js/c545447_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c545447',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c545447_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/40b1005')) {
                // _assetic_40b1005
                if ($pathinfo === '/js/40b1005.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40b1005',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_40b1005',);
                }

                // _assetic_40b1005_0
                if ($pathinfo === '/js/40b1005_materialize_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40b1005',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_40b1005_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/27e1206')) {
                // _assetic_27e1206
                if ($pathinfo === '/css/27e1206.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '27e1206',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_27e1206',);
                }

                // _assetic_27e1206_0
                if ($pathinfo === '/css/27e1206_normalize_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '27e1206',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_27e1206_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/d87370c')) {
                // _assetic_d87370c
                if ($pathinfo === '/css/d87370c.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd87370c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d87370c',);
                }

                // _assetic_d87370c_0
                if ($pathinfo === '/css/d87370c_materialize_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd87370c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d87370c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/e503752')) {
                // _assetic_e503752
                if ($pathinfo === '/css/e503752.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e503752',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e503752',);
                }

                // _assetic_e503752_0
                if ($pathinfo === '/css/e503752_jquery-ui_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e503752',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e503752_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/30696da')) {
                // _assetic_30696da
                if ($pathinfo === '/css/30696da.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '30696da',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_30696da',);
                }

                // _assetic_30696da_0
                if ($pathinfo === '/css/30696da_main_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '30696da',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_30696da_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/f5e3e5c')) {
                // _assetic_f5e3e5c
                if ($pathinfo === '/css/f5e3e5c.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5e3e5c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f5e3e5c',);
                }

                if (0 === strpos($pathinfo, '/css/f5e3e5c_')) {
                    // _assetic_f5e3e5c_0
                    if ($pathinfo === '/css/f5e3e5c_normalize_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5e3e5c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f5e3e5c_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/f5e3e5c_m')) {
                        // _assetic_f5e3e5c_1
                        if ($pathinfo === '/css/f5e3e5c_modal_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5e3e5c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f5e3e5c_1',);
                        }

                        if (0 === strpos($pathinfo, '/css/f5e3e5c_ma')) {
                            // _assetic_f5e3e5c_2
                            if ($pathinfo === '/css/f5e3e5c_materialize_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5e3e5c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f5e3e5c_2',);
                            }

                            // _assetic_f5e3e5c_3
                            if ($pathinfo === '/css/f5e3e5c_main_4.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5e3e5c',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_f5e3e5c_3',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ef3773e')) {
            // _assetic_ef3773e
            if ($pathinfo === '/js/ef3773e.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ef3773e',);
            }

            if (0 === strpos($pathinfo, '/js/ef3773e_')) {
                // _assetic_ef3773e_0
                if ($pathinfo === '/js/ef3773e_angular.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ef3773e_0',);
                }

                // _assetic_ef3773e_1
                if ($pathinfo === '/js/ef3773e_route_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ef3773e_1',);
                }

                // _assetic_ef3773e_2
                if ($pathinfo === '/js/ef3773e_angular-resources_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ef3773e_2',);
                }

                // _assetic_ef3773e_3
                if ($pathinfo === '/js/ef3773e_services_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ef3773e_3',);
                }

                // _assetic_ef3773e_4
                if ($pathinfo === '/js/ef3773e_controllers_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ef3773e_4',);
                }

                // _assetic_ef3773e_5
                if ($pathinfo === '/js/ef3773e_app_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef3773e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ef3773e_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/0eebbdf')) {
            // _assetic_0eebbdf
            if ($pathinfo === '/images/0eebbdf.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0eebbdf',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_0eebbdf',);
            }

            // _assetic_0eebbdf_0
            if ($pathinfo === '/images/0eebbdf_logo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0eebbdf',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_0eebbdf_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/old')) {
            if (0 === strpos($pathinfo, '/old/post')) {
                // reply_comment
                if (preg_match('#^/old/post/(?P<id>[^/]++)/reply_comment$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reply_comment')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\CommentController::replyAction',));
                }

                // update_comment
                if (preg_match('#^/old/post/(?P<id>[^/]++)/update_comment$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_comment')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\CommentController::updateAction',));
                }

                // delete_comment
                if (preg_match('#^/old/post/(?P<id>[^/]++)/delete_comment$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_comment')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\CommentController::deleteAction',));
                }

            }

            // file
            if (0 === strpos($pathinfo, '/old/files') && preg_match('#^/old/files/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'file')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FileController::fileAction',));
            }

            // image
            if (0 === strpos($pathinfo, '/old/image') && preg_match('#^/old/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FileController::imageAction',));
            }

            // preview
            if (0 === strpos($pathinfo, '/old/preview') && preg_match('#^/old/preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preview')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FileController::previewAction',));
            }

            // file_delete
            if (0 === strpos($pathinfo, '/old/file') && preg_match('#^/old/file/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'file_delete')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FileController::deleteAction',));
            }

            // cvut_fit_biwt1_blog_ui_post_admin
            if ($pathinfo === '/old/admin') {
                return array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::adminAction',  '_route' => 'cvut_fit_biwt1_blog_ui_post_admin',);
            }

            // home
            if (rtrim($pathinfo, '/') === '/old') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home');
                }

                return array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::indexAction',  '_route' => 'home',);
            }

            // new_post
            if ($pathinfo === '/old/newpost') {
                return array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::newAction',  '_route' => 'new_post',);
            }

            if (0 === strpos($pathinfo, '/old/post')) {
                // post_update
                if (preg_match('#^/old/post/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_update')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::updateAction',));
                }

                // post_detail
                if (preg_match('#^/old/post/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_detail')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::detailAction',));
                }

                // post_files_delete
                if (preg_match('#^/old/post/(?P<id>[^/]++)/files_delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_files_delete')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::deleteFilesAction',));
                }

                // post_delete
                if (preg_match('#^/old/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\PostController::deleteAction',));
                }

            }

            // login
            if ($pathinfo === '/old/login') {
                return array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

        }

        // cvut_fit_biwt1_blog_ui_angular_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cvut_fit_biwt1_blog_ui_angular_index');
            }

            return array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\AngularController::indexAction',  '_route' => 'cvut_fit_biwt1_blog_ui_angular_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AcmeHomeBundle:home:show',  '_route' => 'homepage',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/posts')) {
                // update_post
                if (preg_match('#^/api/posts/(?P<id>[^/]++)/update(?:\\.(?P<_format>json|xml))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_update_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_post')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FOSPostController::updatePostAction',  '_format' => 'json',));
                }
                not_update_post:

                // get_posts
                if (preg_match('#^/api/posts(?:\\.(?P<_format>json|xml))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_posts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_posts')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FOSPostController::getPostsAction',  '_format' => 'json',));
                }
                not_get_posts:

                // get_post
                if (preg_match('#^/api/posts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_post')), array (  '_controller' => 'Cvut\\Fit\\BiWT1\\Blog\\UiBundle\\Controller\\FOSPostController::getPostAction',  '_format' => 'json',));
                }
                not_get_post:

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
