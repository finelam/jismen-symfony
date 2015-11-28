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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/bootstrap_css')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/assetic/bootstrap_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_css_bootstrap')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/main_css')) {
                // _assetic_main_css
                if ($pathinfo === '/assetic/main_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_main_css',);
                }

                // _assetic_main_css_0
                if ($pathinfo === '/assetic/main_css_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_main_css_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/assetic/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/assetic/jquery_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/assetic/bootstrap_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                // _assetic_bootstrap_js_0
                if ($pathinfo === '/assetic/bootstrap_js_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/ffb9ea2')) {
            // _assetic_ffb9ea2
            if ($pathinfo === '/css/ffb9ea2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffb9ea2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ffb9ea2',);
            }

            if (0 === strpos($pathinfo, '/css/ffb9ea2_part_')) {
                // _assetic_ffb9ea2_0
                if ($pathinfo === '/css/ffb9ea2_part_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffb9ea2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ffb9ea2_0',);
                }

                // _assetic_ffb9ea2_1
                if ($pathinfo === '/css/ffb9ea2_part_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffb9ea2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ffb9ea2_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a56fa94')) {
            // _assetic_a56fa94
            if ($pathinfo === '/js/a56fa94.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a56fa94',);
            }

            if (0 === strpos($pathinfo, '/js/a56fa94_part_')) {
                // _assetic_a56fa94_0
                if ($pathinfo === '/js/a56fa94_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a56fa94_0',);
                }

                // _assetic_a56fa94_1
                if ($pathinfo === '/js/a56fa94_part_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a56fa94_1',);
                }

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

        // clients_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'clients_homepage');
            }

            return array (  '_controller' => 'ClientsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'clients_homepage',);
        }

        // category_client
        if (preg_match('#^/(?P<id>[^/]++)/categorie/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'category_client');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_client')), array (  '_controller' => 'ClientsBundle\\Controller\\DefaultController::categoryAction',));
        }

        // product_client
        if (preg_match('#^/(?P<id>[^/]++)/article/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'product_client');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_client')), array (  '_controller' => 'ClientsBundle\\Controller\\DefaultController::productAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tva')) {
                // tva
                if (rtrim($pathinfo, '/') === '/admin/tva') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tva');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TVAController::indexAction',  '_route' => 'tva',);
                }

                // tva_show
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_show')), array (  '_controller' => 'AppBundle\\Controller\\TVAController::showAction',));
                }

                // tva_new
                if ($pathinfo === '/admin/tva/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TVAController::newAction',  '_route' => 'tva_new',);
                }

                // tva_create
                if ($pathinfo === '/admin/tva/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tva_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TVAController::createAction',  '_route' => 'tva_create',);
                }
                not_tva_create:

                // tva_edit
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_edit')), array (  '_controller' => 'AppBundle\\Controller\\TVAController::editAction',));
                }

                // tva_update
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tva_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_update')), array (  '_controller' => 'AppBundle\\Controller\\TVAController::updateAction',));
                }
                not_tva_update:

                // tva_delete
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tva_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_delete')), array (  '_controller' => 'AppBundle\\Controller\\TVAController::deleteAction',));
                }
                not_tva_delete:

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                if (0 === strpos($pathinfo, '/admin/su')) {
                    if (0 === strpos($pathinfo, '/admin/supplier')) {
                        // supplier
                        if (rtrim($pathinfo, '/') === '/admin/supplier') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'supplier');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::indexAction',  '_route' => 'supplier',);
                        }

                        // supplier_show
                        if (preg_match('#^/admin/supplier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_show')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::showAction',));
                        }

                        // supplier_new
                        if ($pathinfo === '/admin/supplier/new') {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::newAction',  '_route' => 'supplier_new',);
                        }

                        // supplier_create
                        if ($pathinfo === '/admin/supplier/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_supplier_create;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::createAction',  '_route' => 'supplier_create',);
                        }
                        not_supplier_create:

                        // supplier_edit
                        if (preg_match('#^/admin/supplier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_edit')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::editAction',));
                        }

                        // supplier_update
                        if (preg_match('#^/admin/supplier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_supplier_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_update')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::updateAction',));
                        }
                        not_supplier_update:

                        // supplier_delete
                        if (preg_match('#^/admin/supplier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_supplier_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_delete')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::deleteAction',));
                        }
                        not_supplier_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/sub_category')) {
                        // sub_category
                        if (rtrim($pathinfo, '/') === '/admin/sub_category') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sub_category');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::indexAction',  '_route' => 'sub_category',);
                        }

                        // sub_category_show
                        if (preg_match('#^/admin/sub_category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sub_category_show')), array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::showAction',));
                        }

                        // sub_category_new
                        if ($pathinfo === '/admin/sub_category/new') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::newAction',  '_route' => 'sub_category_new',);
                        }

                        // sub_category_create
                        if ($pathinfo === '/admin/sub_category/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_sub_category_create;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::createAction',  '_route' => 'sub_category_create',);
                        }
                        not_sub_category_create:

                        // sub_category_edit
                        if (preg_match('#^/admin/sub_category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sub_category_edit')), array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::editAction',));
                        }

                        // sub_category_update
                        if (preg_match('#^/admin/sub_category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_sub_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sub_category_update')), array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::updateAction',));
                        }
                        not_sub_category_update:

                        // sub_category_delete
                        if (preg_match('#^/admin/sub_category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_sub_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sub_category_delete')), array (  '_controller' => 'AppBundle\\Controller\\Sub_categoryController::deleteAction',));
                        }
                        not_sub_category_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/size')) {
                    // size
                    if (rtrim($pathinfo, '/') === '/admin/size') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'size');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SizeController::indexAction',  '_route' => 'size',);
                    }

                    // size_show
                    if (preg_match('#^/admin/size/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_show')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::showAction',));
                    }

                    // size_new
                    if ($pathinfo === '/admin/size/new') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SizeController::newAction',  '_route' => 'size_new',);
                    }

                    // size_create
                    if ($pathinfo === '/admin/size/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_size_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SizeController::createAction',  '_route' => 'size_create',);
                    }
                    not_size_create:

                    // size_edit
                    if (preg_match('#^/admin/size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_edit')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::editAction',));
                    }

                    // size_update
                    if (preg_match('#^/admin/size/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_size_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_update')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::updateAction',));
                    }
                    not_size_update:

                    // size_delete
                    if (preg_match('#^/admin/size/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_size_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_delete')), array (  '_controller' => 'AppBundle\\Controller\\SizeController::deleteAction',));
                    }
                    not_size_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                // product
                if (rtrim($pathinfo, '/') === '/admin/product') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'product');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
                }

                // product_show
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::showAction',));
                }

                // product_new
                if ($pathinfo === '/admin/product/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
                }

                // product_create
                if ($pathinfo === '/admin/product/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_product_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
                }
                not_product_create:

                // product_edit
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::editAction',));
                }

                // product_update
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::updateAction',));
                }
                not_product_update:

                // product_delete
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::deleteAction',));
                }
                not_product_delete:

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/co')) {
                    if (0 === strpos($pathinfo, '/admin/command')) {
                        // command
                        if (rtrim($pathinfo, '/') === '/admin/command') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'command');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CommandController::indexAction',  '_route' => 'command',);
                        }

                        // command_show
                        if (preg_match('#^/admin/command/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'command_show')), array (  '_controller' => 'AppBundle\\Controller\\CommandController::showAction',));
                        }

                        // command_new
                        if ($pathinfo === '/admin/command/new') {
                            return array (  '_controller' => 'AppBundle\\Controller\\CommandController::newAction',  '_route' => 'command_new',);
                        }

                        // command_create
                        if ($pathinfo === '/admin/command/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_command_create;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\CommandController::createAction',  '_route' => 'command_create',);
                        }
                        not_command_create:

                        // command_edit
                        if (preg_match('#^/admin/command/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'command_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommandController::editAction',));
                        }

                        // command_update
                        if (preg_match('#^/admin/command/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_command_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'command_update')), array (  '_controller' => 'AppBundle\\Controller\\CommandController::updateAction',));
                        }
                        not_command_update:

                        // command_delete
                        if (preg_match('#^/admin/command/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_command_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'command_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommandController::deleteAction',));
                        }
                        not_command_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/color')) {
                        // color
                        if (rtrim($pathinfo, '/') === '/admin/color') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'color');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ColorController::indexAction',  '_route' => 'color',);
                        }

                        // color_show
                        if (preg_match('#^/admin/color/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'color_show')), array (  '_controller' => 'AppBundle\\Controller\\ColorController::showAction',));
                        }

                        // color_new
                        if ($pathinfo === '/admin/color/new') {
                            return array (  '_controller' => 'AppBundle\\Controller\\ColorController::newAction',  '_route' => 'color_new',);
                        }

                        // color_create
                        if ($pathinfo === '/admin/color/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_color_create;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ColorController::createAction',  '_route' => 'color_create',);
                        }
                        not_color_create:

                        // color_edit
                        if (preg_match('#^/admin/color/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'color_edit')), array (  '_controller' => 'AppBundle\\Controller\\ColorController::editAction',));
                        }

                        // color_update
                        if (preg_match('#^/admin/color/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_color_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'color_update')), array (  '_controller' => 'AppBundle\\Controller\\ColorController::updateAction',));
                        }
                        not_color_update:

                        // color_delete
                        if (preg_match('#^/admin/color/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_color_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'color_delete')), array (  '_controller' => 'AppBundle\\Controller\\ColorController::deleteAction',));
                        }
                        not_color_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/category')) {
                    // category
                    if (rtrim($pathinfo, '/') === '/admin/category') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'category');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                    }

                    // category_show
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',));
                    }

                    // category_new
                    if ($pathinfo === '/admin/category/new') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                    }

                    // category_create
                    if ($pathinfo === '/admin/category/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_category_create;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                    }
                    not_category_create:

                    // category_edit
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
                    }

                    // category_update
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_category_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::updateAction',));
                    }
                    not_category_update:

                    // category_delete
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
                    }
                    not_category_delete:

                }

            }

            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_index',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
