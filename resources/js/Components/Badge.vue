<script setup>
import {computed} from "vue";

const props = defineProps({
    type: {
        type: String,
        default: 'default',
    },
    size: {
        type: String,
        default: 'sm'
    },
    value: {
        type: String,
    },
});

const typeClasses = computed(() => {
    return {
        'border-grey-50 bg-grey-25 text-grey-300': props.type === 'default',
        'border-success-300 bg-success-50 text-success-500': props.type === 'success',
        'border-error-300 bg-error-50 text-error-500': props.type === 'error',
        'border-warning-300 bg-warning-50 text-warning-500': props.type === 'warning'
    };
});

</script>

<template>
    <div class="inline-block py-1 px-1.5 rounded-3xl border text-xs font-medium text-center"
         :class="[typeClasses]"
    >
        <span v-if="value">{{ value }}</span>
        <span v-else><slot/></span>
    </div>
</template>
