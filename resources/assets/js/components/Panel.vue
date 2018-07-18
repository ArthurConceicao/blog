<template>
    <div :class="setColor">
        <div class="panel-heading">{{ title }}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Panel",
        props: ['title','color'],
        computed: {
            setColor: function () {
                return "panel " + (this.color || "panel-default");
            }
        }
    }
</script>

<style scoped>

</style>