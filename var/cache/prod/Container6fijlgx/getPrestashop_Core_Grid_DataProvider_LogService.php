<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data_provider.log' shared service.

return $this->services['prestashop.core.grid.data_provider.log'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(${($_ = isset($this->services['prestashop.core.admin.log.repository']) ? $this->services['prestashop.core.admin.log.repository'] : $this->load('getPrestashop_Core_Admin_Log_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.query.doctrine_query_parser']) ? $this->services['prestashop.core.grid.query.doctrine_query_parser'] : ($this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser())) && false ?: '_'}, 'logs');
