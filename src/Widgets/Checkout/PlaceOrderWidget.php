<?php

namespace Ceres\Widgets\Checkout;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\Settings\ValueListFactory;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class PlaceOrderWidget extends BaseWidget
{
    protected $template = "Ceres::Widgets.Checkout.PlaceOrderWidget";

    public function getData()
    {
        return WidgetDataFactory::make("Ceres::PlaceOrderWidget")
            ->withLabel("Widget.placeOrderLabel")
            ->withPreviewImageUrl("/images/widgets/place-order.svg")
            ->withType(WidgetTypes::CHECKOUT)
            ->withCategory(WidgetCategories::CHECKOUT)
            ->withPosition(700)
            ->toArray();
    }

    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);

        $settings->createCustomClass();
        $settings->createAppearance()
            ->withDefaultValue("success");

        $settings->createButtonSize();
        $settings->createSpacing();

        return $settings->toArray();
    }
}
