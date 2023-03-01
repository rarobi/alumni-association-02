<template lang="html">
    <div class="pull-right">
      <span style="color: teal" v-if="checkUser()">Online</span>
      <span style="color:teal" v-else>Offline </span>

    </div>
</template>

<script>
    export default {
        props: ['friend', 'onlineusers'],
        methods: {
            checkUser: function() {
                return _.find(this.onlineusers, {id: this.friend.id});
            },
            checkLast: function () {
                const tied= new Date().getFullYear();
                return tied;
            }
        }
    }
</script>

<style lang="css">
    .red {
        color: red;
    }
    .teal {
        color: teal;
    }
</style>
