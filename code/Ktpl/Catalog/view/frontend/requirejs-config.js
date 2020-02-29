var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'Ktpl_Catalog/js/action/set-shipping-information-mixin' : true
            }
        }
    },
    "map": {
        "*": {
            "Magento_Checkout/js/model/shipping-save-processor/default" : "Ktpl_Catalog/js/shipping-save-processor"
        }
    }
};