<x-web-layout>
    <style>
       .prose :where(h2):not(:where([class~="not-prose"] *)), .prose :where(strong):not(:where([class~="not-prose"] *))   {
            color: #ffffff;
        }
        h1 {
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 4.5rem
                /* 72px */
            ;
            line-height: 1;
        }

        h2 {
            color: #fff;
            font-size: 1.5rem
                /* 24px */
            ;
            line-height: 2rem
                /* 32px */
            ;
            text-transform: uppercase;
        }

        h3 {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
            text-transform: uppercase;
        }

        h4 {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
            text-transform: uppercase;
        }

        h5 {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
            text-transform: uppercase;
        }

        h6 {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
            text-transform: uppercase;
        }

        ul {
            list-style: none;
            color: #fff
        /*986456457899879788798787987789}

        ul li {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
        }

        ol {
            list-style: none;
            color: #fff
        }

        ol li {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
        }

        table {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
        }

        .wp-block-preformatted {
            color: #fff;
            font-size: 1.25rem
                /* 20px */
            ;
            line-height: 1.75rem
                /* 28px */
            ;
        }

        p {
            color: #fff;
            font-size: 1.25rem;
            /* Adjust the font size as needed */
            font-family: 'Roboto', sans-serif;
            line-height: 1.75;
        }

        .larabergContent {
            margin: 5rem 1rem;
        }
    </style>
    <head>
        <!-- Other meta tags -->
        <meta name="description" content="{{  $post->description }}">
        <!-- Other head elements -->
    </head>
    <!-- Blog Post Page with Tailwind Styling -->
    <div class=" mx-auto px-4 py-8 text-primary">
        <h1 class="text-3xl font-bold mb-4 text-primary">{{ $post->title }}</h1>
        <div class="prose max-w-none mb-8 text-primary">
            {!! $post->content !!}
        </div>
        <!-- Add styling for comments, related posts, etc. -->
    </div>

</x-web-layout>
