<script setup>
import {computed} from "vue";

const props = defineProps({
    type: {
        type: String,
        default: 'button',
    },
    size: {
        type: String,
        default: 'md'
    },
    variant: {
        type: String,
        default: 'default',
    },
    styleType: {
        type: String,
        default: 'filled',
    },
    icon: {
        type: Boolean,
        default: false,
    },
    disabled: {
        type: Boolean,
        default: false,
    },
    loading: {
        type: Boolean,
        default: false,
    },
});

const variantClasses = computed(() => {
    return {
        'bg-grey-25 text-grey-500 hover:bg-grey-50 active:bg-grey-25 disabled:bg-grey-25 disabled:text-grey-100': props.variant === 'default' && props.styleType === 'filled',
        'bg-white border border-grey-50 text-grey-500 hover:bg-grey-50 active:bg-grey-50 disabled:bg-grey-50 disabled:text-grey-100': props.variant === 'default' && props.styleType === 'outlined',
        'bg-white border border-grey-50 text-grey-500 hover:bg-grey-25 hover:border hover:border-grey-50 active:border active:border-grey-50 active:bg-white disabled:bg-grey-25 disabled:border disabled:border-grey-50 disabled:text-grey-100': props.variant === 'default' && props.styleType === 'filled-outlined',
        'text-grey-500 hover:text-grey-600 active:text-grey-500 disabled:text-grey-100': props.variant === 'default' && props.styleType === 'text',
        'bg-primary-500 text-white hover:bg-primary-600 active:bg-primary-500 disabled:bg-primary-200': props.variant === 'primary' && props.styleType === 'filled',
        'border-primary-500 text-primary-500 hover:border-primary-600 hover:text-primary-600 active:border active:border-primary-500 active:text-primary-500 disabled:border-primary-200 disabled:text-primary-200': props.variant === 'primary' && props.styleType === 'outlined',
        'bg-primary-50 border-primary-300 text-primary-500 hover:bg-primary-100 hover:border-primary-400 hover:text-primary-600 active:border active:border-primary-300 active:bg-primary-50 disabled:bg-primary-25 disabled:border-primary-200 disabled:text-primary-200': props.variant === 'primary' && props.styleType === 'filled-outlined',
        'text-primary-500 hover:text-primary-600 active:text-primary-500 disabled:text-primary-200': props.variant === 'primary' && props.styleType === 'text',
        'bg-success-500 text-white hover:bg-success-600 hover:text-white active:bg-success-500 active:text-white disabled:bg-success-200 disabled:text-white': props.variant === 'success' && props.styleType === 'filled',
        'border border-success-500 text-success-500 hover:border hover:border-success-600 active:border active:border-success-500 active:text-success-500 disabled:border disabled:border-success-200 disabled:text-success-200': props.variant === 'success' && props.styleType === 'outlined',
        'border border-success-300 bg-success-50 text-success-500 hover:border hover:border-success-400 hover:bg-success-50 active:border active:border-success-300 active:bg-success-50 active:text-success-500 disabled:border disabled:border-success-200 disabled:bg-success-25 disabled:text-success-200': props.variant === 'success' && props.styleType === 'filled-outlined',
        'text-success-500 hover:text-success-600 active:text-success-500 disabled:bg-success-200': props.variant === 'success' && props.styleType === 'text',
        'bg-error-500 text-white hover:bg-error-600 active:bg-error-500 disabled:bg-error-200': props.variant === 'error' && props.styleType === 'filled',
        'border border-error-500 text-error-500 hover:border hover:border-error-600 hover:text-error-600 active:border active:border-error-500 active:text-error-500 disabled:border disabled:border-error-200 disabled:text-error-200': props.variant === 'error' && props.styleType === 'outlined',
        'bg-error-50 border border-error-300 text-error-500 hover:border hover:border-error-400 hover:text-error-600 active:border active:border-error-300 active:text-error-500 disabled:bg-error-25 disabled:border disabled:border-error-200 disabled:text-error-200': props.variant === 'error' && props.styleType === 'filled-outlined',
        'text-error-500 hover:text-error-600 active:text-error-500 disabled:text-error-200': props.variant === 'error' && props.styleType === 'text',
    };
});

const sizeClasses = computed(() => {
    return {
        'py-2 px-3 text-xs': props.size === 'xs' && !props.icon,
        'py-2 px-2 text-xs': props.size === 'xs' && props.icon,
        'py-2 px-5 text-sm': props.size === 'sm' && !props.icon,
        'py-2 px-2.5 text-sm': props.size === 'sm' && props.icon,
        'py-2 px-6': props.size === 'md' && !props.icon,
        'py-2 px-2.5': props.size === 'md' && props.icon,
        'py-3 px-7': props.size === 'lg' && !props.icon,
        'py-3 px-3.5': props.size === 'lg' && props.icon,
        'py-4 px-8 text-lg': props.size === 'xl' && !props.icon,
        'py-4 px-4.5 text-lg': props.size === 'xl' && props.icon,
    };
});

</script>
<template>
    <button
        :type="type"
        class="rounded-d inline-flex items-center transition-all duration-300"
        :class="[
            variantClasses,
            sizeClasses
            ]"
    >
        <slot/>
    </button>
</template>
