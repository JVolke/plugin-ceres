import Vue from "vue";


export default Vue.component("order-property-list-group", {

    components:
    {
        OrderPropertyListItem
    },

    props:
    {
        template:
        {
            type: String,
            default: "#vue-order-property-list-group"
        },
        paddingClasses:
        {
            type: String,
            default: null
        },
        paddingInlineStyles:
        {
            type: String,
            default: null
        },
        propertyGroup: Object
    },

    computed:
    {
        isShownOnItemPageCount()
        {
            const properties = this.propertyGroup.properties.filter(property => property.isShownOnItemPage);

            return properties.length;
        }
    }
});
