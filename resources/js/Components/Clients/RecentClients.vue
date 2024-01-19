<script setup>
import {EnvelopeIcon, PhoneIcon, UserIcon, CubeIcon, ChevronLeftIcon, ChevronRightIcon, EllipsisHorizontalIcon} from "@heroicons/vue/24/outline";
import Dropdown from "@/Components/Dropdown.vue";
import {onMounted} from "vue";

import {register} from 'swiper/element/bundle';
import {Navigation, Pagination} from "swiper/modules";

import DropdownLink from "@/Components/DropdownLink.vue";

register();


const props = defineProps(['clients']);


onMounted(() => {
    const swiperEl = document.querySelector('swiper-container');
    const swiperButtonPrev = document.querySelector('.swiper-button-prev');
    const swiperButtonNext = document.querySelector('.swiper-button-next');

    swiperButtonNext.addEventListener('click', (e) => {
        e.preventDefault();
        swiperEl.swiper.slideNext();
    });
    swiperButtonPrev.addEventListener('click', (e) => {
        e.preventDefault();
        swiperEl.swiper.slidePrev();
    });

    const swiperParams = {
        modules: [Navigation, Pagination],
        spaceBetween: 'spaceBetween',
        centeredSlides: false,
        breakpoints: {
            320: {
                slidesPerView: 1.25,
                spaceBetween: 10
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 3.25,
                spaceBetween: 10
            },
            992: {
                slidesPerView: 3.25,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 4.25,
                spaceBetween: 10
            },
            1280: {
                slidesPerView: 5.25,
                spaceBetween: 10
            }
        }
    };

    Object.assign(swiperEl, swiperParams);
    swiperEl.initialize();
});
</script>

<template>
    <div class="mb-6">
        <div class="flex items-center justify-between mb-3">
            <h3 class="text-lg font-medium text-grey-500">Recently Viewed</h3>
            <div class="flex items-center">
                <a href=""
                   class="swiper-button-prev bg-white w-9 h-9 flex items-center justify-center rounded mr-4">
                    <ChevronLeftIcon class="w-6 h-6 text-custom-300"/>
                </a>
                <a href=""
                   class="swiper-button-next bg-white w-9 h-9 flex items-center justify-center rounded">
                    <ChevronRightIcon class="w-6 h-6 text-custom-300"/>
                </a>
            </div>
        </div>
        <swiper-container init="false">
            <swiper-slide v-for="(item, i) in clients" :key="i">
                <div class="bg-white rounded">
                    <div class="p-4">
                        <div class="flex items-start justify-between mb-3">
                            <h6 class="text-sm font-medium text-grey-500 h-10">{{ item.fullname }}</h6>
                            <div>
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button type="button" class="text-grey-200">
                                            <EllipsisHorizontalIcon class="w-5 h-5"/>
                                        </button>
                                    </template>
                                    <template #content>
                                        <DropdownLink href="/">
                                            <UserIcon class="w-4 h-4 inline-block mr-2"/>
                                            View Client
                                        </DropdownLink>
                                        <DropdownLink href="/">
                                            <CubeIcon class="w-4 h-4 inline-block mr-2"/>
                                            View Last Order
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                        <p class="text-sm text-grey-500">{{ item.event_title }}</p>
                        <div class="flex items-center">
                            <p class="text-xs font-medium text-grey-300">${{ item.grandTotal }}</p>
                            <span class="mx-1 w-1 h-1 bg-grey-50 rounded-full"></span>
                            <p class="text-grey-300 text-xs font-medium">{{ item.eventStartDate }}</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-3 px-4 border-t border-grey-50 bg-white">
                        <button type="button"
                                class="rounded border border-grey-50 text-grey-500 py-2 px-3 text-xs font-medium hover:border-primary-500 hover:bg-primary-50 hover:text-primary-500 transition-all duration-300">
                            Create New Order
                        </button>
                        <div class="flex items-center gap-2">
                            <a v-if="item.email"
                               :href="'tel:' + item.email"
                               class="w-8 h-8 rounded flex items-center justify-center bg-white text-grey-300 border border-grey-50 hover:border-primary-500 hover:bg-primary-50 hover:text-primary-500 transition-all duration-300">
                                <EnvelopeIcon class="w-4 h-4"/>
                            </a>
                            <a v-if="item.phone"
                               :href="'tel:' + item.phone"
                               class="w-8 h-8 rounded flex items-center justify-center bg-white text-grey-300 border border-grey-50 hover:border-primary-500 hover:bg-primary-50 hover:text-primary-500 transition-all duration-300">
                                <PhoneIcon class="w-4 h-4"/>
                            </a>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
    </div>
</template>
