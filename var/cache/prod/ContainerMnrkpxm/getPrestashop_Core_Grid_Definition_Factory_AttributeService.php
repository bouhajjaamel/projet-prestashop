<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.attribute' shared service.

$this->services['prestashop.core.grid.definition.factory.attribute'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AttributeGridDefinitionFactory(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}->getCurrentRequest()->attributes->getInt("attributeGroupId"), ${($_ = isset($this->services['prestashop.core.attribute_group.attribute_group_view_data_provider']) ? $this->services['prestashop.core.attribute_group.attribute_group_view_data_provider'] : $this->load('getPrestashop_Core_AttributeGroup_AttributeGroupViewDataProviderService.php')) && false ?: '_'});

$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

return $instance;