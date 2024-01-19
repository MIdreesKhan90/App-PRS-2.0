import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '4.5': '1.125rem',
            },
            borderRadius: {
                "d": "3px",
            },
            boxShadow: {
                'd': '0 3px 24px 0 rgba(0, 0, 0, 0.17)',
            },
            backdropBlur: {
                'd': '1.399999976158142px'
            },
            width: {
                "828": "828px"
            },
            minWidth: {
                '9': '2.25rem',
            },
            colors: {
                primary: {
                    25: "#F2F6F4",
                    50: "#EBF5F0",
                    100: "#C2DFD0",
                    200: "#A5CFBA",
                    300: "#7CB99A",
                    400: "#62AC86",
                    500: "#3B9768",
                    600: "#2A6B4A",
                    700: "#205339",
                    800: "#193F2C",
                },
                grey: {
                    25: "#F3F3F3",
                    50: "#E8E8E8",
                    100: "#959695",
                    200: "#717373",
                    300: "#5A5C5C",
                    400: "#383B3A",
                    500: "#131615",
                    600: "#0D100F",
                    700: "#0A0C0C",
                    800: "#080909",
                },
                success: {
                    25: "#EEF6F4",
                    50: "#E8F8F3",
                    100: "#B6EAD9",
                    200: "#93E0C6",
                    300: "#62D1AC",
                    400: "#43C99C",
                    500: "#14BB83",
                    600: "#0E855D",
                    700: "#0B6748",
                    800: "#084F37",
                },
                error: {
                    25: "#F9F0EE",
                    50: "#FDECE8",
                    100: "#F9C5B7",
                    200: "#F6A995",
                    300: "#F28164",
                    400: "#EF6946",
                    500: "#EB4318",
                    600: "#A73011",
                    700: "#81250D",
                    800: "#631C0A",
                },
                warning: {
                    25: "#F9F5ED",
                    50: "#FEF6E6",
                    100: "#FCE2B2",
                    200: "#FAD48D",
                    300: "#F8C159",
                    400: "#F7B539",
                    500: "#F5A207",
                    600: "#AE7305",
                    700: "#875904",
                    800: "#674403",
                },
                "blue-grey": {
                    300: "#0F172A",
                    400: "#494F5A",
                    500: "#2B3240",
                },
                dark: {
                    100: "#F0F2F5",
                    600: "#404652",
                    700: "#2B3240",
                    800: "#27272a",
                },
                custom: {
                    500: "#D5D6D9",
                    50: "#F4FBF5",
                    150: "#ECF5F0",
                    200: "#E1E2E3",
                    250: "#8F939A",
                    300: "#535964",
                    350: "#CDCED1",
                    400: "#686D77",
                    450: "#F1F1F2",
                    550: "#F5F5F5",
                    600: "#7C8088",
                    650: "#B9BBBF",
                    700: "#D9D9D9",
                    750: "#F5FAF7",
                    800: "#EBF0ED",
                    850: "#616468"
                }
            }
        },
    },

    plugins: [forms],
};
