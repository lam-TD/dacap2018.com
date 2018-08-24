<template>
    <div id="main-wrapper">
        <top-bar></top-bar>
        <left-bar></left-bar>
        <router-view></router-view>
    </div>
</template>

<script>
    import TopBar from './navbar/Topbar';
    import LeftBar from './navbar/Leftbar';
    import BottomBar from './navbar/BottomBar'
    export default {
        name: 'main-app',
        components: {LeftBar, TopBar},
        comments:{TopBar, LeftBar}
    }
</script>
