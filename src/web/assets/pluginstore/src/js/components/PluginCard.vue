<template>
    <div v-if="plugin" class="plugin-card" @click="$emit('click')">
        <div class="plugin-icon">
            <img v-if="plugin.iconUrl" :src="plugin.iconUrl" height="32" />
            <div class="default-icon" v-else></div>
        </div>

        <div>
            <strong>{{ plugin.name }}</strong>
            <div>{{ plugin.shortDescription }}</div>

            <p v-if="plugin.editions[0].price != '0.00'" class="light">{{ plugin.editions[0].price|currency }}</p>
            <p class="light" v-else>Free</p>

            <div v-if="isInstalled(plugin)" class="installed" data-icon="check"></div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'

    export default {

        props: ['plugin'],

        computed: {

            ...mapGetters({
                isInstalled: 'isInstalled',
            }),
        }

    }
</script>
