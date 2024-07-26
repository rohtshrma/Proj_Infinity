<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Component</title>
    <style>
        body {
            background-color: white;
            margin: 0;
        }

        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .items-center {
            align-items: center;
        }

        .pb-20 {
            padding-bottom: 20px;
        }

        .text-base {
            font-size: 1rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-black {
            color: black;
        }

        .gap-5 {
            gap: 5px;
        }

        .justify-between {
            justify-content: space-between;
        }

        .self-stretch {
            align-self: stretch;
        }

        .w-full {
            width: 100%;
        }

        .flex-wrap-md {
            flex-wrap: wrap;
        }

        .max-width-full-md {
            max-width: 100%;
        }

        .shrink-0 {
            flex-shrink: 0;
        }

        .aspect-ratio-3-45 {
            aspect-ratio: 3.45;
        }

        .width-225 {
            width: 225px;
        }

        .mt-9 {
            margin-top: 9px;
        }

        .self-end {
            align-self: flex-end;
            gap: 20px;
        }

        .bg-gray-light {
            background-color: #d1d5db;
        }

        .padding-x-small-md {
            padding-left: 5px;
            padding-right: 5px;
        }

        .justify-center {
            justify-content: center;
        }

        .padding-x-6 {
            padding-left: 6px;
            padding-right: 6px;
        }

        .padding-y-2-5 {
            padding-top: 2.5px;
            padding-bottom: 2.5px;
        }

        .rounded-large {
            border-radius: 1.5rem;
        }

        .padding-x-16 {
            padding-left: 16px;
            padding-right: 16px;
        }

        .padding-y-16 {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .mt-2 {
            margin-top: 2px;
        }

        .text-4xl {
            font-size: 2.25rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .mt-24 {
            margin-top: 24px;
        }

        .max-width-1133 {
            max-width: 1133px;
        }

        .gap-0 {
            gap: 20px;
        }

        .flex-col {
            flex-direction: column;
        }

        .width-25 {
            width: 20%;
        }

        .ml-5 {
            margin-left: 5px;
        }

        .aspect-ratio-1-02 {
            aspect-ratio: 1.02;
        }

        .mt-5 {
            margin-top: 5px;
        }

        .mt-7 {
            margin-top: 7px;
        }

        .mt-10-md {
            margin-top: 10px;
        }

        .flex-grow {
            flex-grow: 1;
        }

        .whitespace-nowrap {
            white-space: nowrap;
        }

        .self-center {
            align-self: center;
        }

        .common-img {
            width: auto;
            /* Set fixed width */
            height: auto;
            /* Maintain aspect ratio */
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            /* Allows cards to wrap onto the next line if needed */
            gap: 20px;
            /* Space between cards */
            justify-content: space-between;
            /* Aligns cards to have space between them */
        }

        .card {
            width: calc(25% - 20px);
            /* Adjusts card width to fit four in a row with gaps */
            background-color: #fff;
            /* Card background color */
            padding: 16px;
            /* Padding inside the card */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Light shadow for card */
            box-sizing: border-box;
            /* Ensures padding and border are included in total width and height */
        }

        .footer-container {
            display: flex;
            justify-content: space-between;

            @media only screen and (max-width: 768px) {
                flex-direction: column;
                padding: 18px;
            }
        }
        .series-container{
            display: flex; gap: 5px;
            @media only screen and (max-width: 768px) {
                flex-direction: column;
            }
        }
        .series-content{
            display: flex;align-items:center;
            @media only screen and (max-width: 768px) {
                padding: 10px 10px 10px 20px;
            }
        }
        .find-more-btn{
           background-color: #E84735;
           border-radius: 20px;
           color: white;
           font-weight: 600;
           padding: 10px 50px;
           border: none;
           margin-top: 20px;
           cursor: pointer;
            @media only screen and (max-width: 768px) {
                padding: 10px 50px;
            }
        }

        .find-more-btn:hover{
            background-color: #bb3121;
        }

        .series-img-cont{
            display: flex;flex-direction:column;width:50%; align-items:center;
            @media only screen and (max-width: 768px) {
                width: 100%;
                align-items: center;
                display: flex;
                justify-content: center;
            }
        }
        .subscribe-above-sec{
            display: flex;width:100%; gap: 95px;justify-content:center; margin-top:36px;
            @media only screen and (max-width: 768px) {
                flex-direction: column;
                align-items: center;
                gap: 24px;
            }
        }
    </style>
</head>

<body>
    <div style="display: flex; flex-direction:column; background-color:white" className="flex flex-col bg-white">
    <?php include 'includes/header.php'; ?>
        <div className="flex overflow-hidden relative flex-col items-center px-16 pt-20 pb-9 w-full min-h-[463px] max-md:px-5 max-md:max-w-full">
            <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/8573d1886c57f26c9cdc34896a0b8d5a6564a2d824b70176ed6ada5168d3e6a2?apiKey=8cf79546bff94982893df7e3757c3630&" style="width:100%" />
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/46f439ade812028fdd7cb91845905dfe02b18f9add0a963dcc6e741bc1d2f3dd?apiKey=8cf79546bff94982893df7e3757c3630&" className="mt-80 aspect-[4.17] w-[34px] max-md:mt-10" />
        </div>
        <div style="margin-top: 24px; width:100%; " className="mt-24 w-full max-md:mt-10 max-md:max-w-full">
            <div class="series-container" className="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="series-img-cont">
                    <img loading="lazy" style="width: 90%;" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/a421b7499888743ccc2390766710b531c65f57485e1a93d051c3f7153c974852?apiKey=8cf79546bff94982893df7e3757c3630&" style="width: 100%;" />
                </div>
                <div class="series-content">
                    <div className="flex flex-col items-center self-stretch px-5 my-auto text-2xl font-bold text-black max-md:mt-10 max-md:max-w-full">
                        <h3>Ultimate Office Collection</h3>
                        <div className="self-stretch mt-7 text-base text-center max-md:max-w-full">
                            We offer meticulously crafted writing instruments for every
                            purpose.
                            <br /> Find your ideal pen.We offer meticulously crafted writing
                            instruments for every purpose. Find your ideal pen.
                        </div>
                       <button class="find-more-btn" >
                            Find More
                       </button>
                    </div>
                </div>
            </div>
        </div>
        
        <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/f2da681495d5ebdfc69975227dbbcb7845b864bb2f9de8e2dc3a8a113a978677?apiKey=8cf79546bff94982893df7e3757c3630&" className="mt-6 w-full aspect-[2.44] max-md:max-w-full" style="margin-bottom: 10px;" />
        <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/abaf3489e2e5a2ab6619c744049161720a8a9ab6a955c908cecdf1a324afd8d0?apiKey=8cf79546bff94982893df7e3757c3630&" className="mt-6 w-full aspect-[2.44] max-md:max-w-full" />
        
        <!-- end boxess -->
        
        <div className="self-center px-5 mt-9 w-full max-w-[1042px] max-md:max-w-full">
            <div class="subscribe-above-sec">
                <div style="width: 284px;height:auto">
                    <img loading="lazy" style="width: 100%;" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/2868ebd6b997efd942e291068d22491bf4cf0f75829955a3b31d0c665dfdc5f8?apiKey=8cf79546bff94982893df7e3757c3630&" className="w-full aspect-square max-md:mt-10" />
                </div>
                <div style="width: 284px;height:auto">
                    <img loading="lazy" style="width: 100%;" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e70097489d0de159844a0e7faff02f5aec531d8282012cd6faff35a3a71bbaa5?apiKey=8cf79546bff94982893df7e3757c3630&" className="w-full aspect-square max-md:mt-10" />
                </div>
                <div style="width: 284px;height:auto">
                    <img loading="lazy" style="width: 100%;" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/51676fa1f454ab6af1f590af880a9f5d49c6a1324400eb5a2246b723ee7070c7?apiKey=8cf79546bff94982893df7e3757c3630&" className="w-full aspect-square max-md:mt-10" />
                </div>
            </div>
        </div>
        <div style="text-align:center;background-color:#E84735;color:white;padding: 26px;">
            <div className="flex flex-col max-w-full w-[383px]">
                <div className="text-white">
                    Subscribe for Updates
                    <br />
                    Get the best deals and interesting gifting ideas.
                </div>
                <button>
                    Enter Your email
                </button>
            </div>
        </div>
        <div style="background-color: black;">
            <div class="footer-container">
                <div>
                    <div>
                        <img loading="lazy" style="width: 200px;height: 150px;" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/21b3bc5866e3aa89190baef7d2b65ebeb34ed37266fb2455974f46530cf3bd1a?apiKey=8cf79546bff94982893df7e3757c3630&" className="object-cover absolute inset-0 size-full" />
                        <p style="color: white;">Infinity stationary is Delhi based stationary agency.It provides all types of stationary.</p>
                    </div>
                    <div className="flex gap-3 self-start mt-2 ml-9 max-md:ml-2.5">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a2cfbef64443ee06b40197be52f2b2c07d01ade81f2569b02268da2034c1f2d5?apiKey=8cf79546bff94982893df7e3757c3630&" className="shrink-0 self-start aspect-[1.3] w-[35px]" />
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0414e02eba237207b3d96b2a2c085ad9273a9651f64ce2bdeec8801f15973f93?apiKey=8cf79546bff94982893df7e3757c3630&" className="shrink-0 aspect-[1.25] w-[35px]" />
                    </div>
                </div>
                <div style="margin-top: 46px;display:flex;flex-direction:column;gap: 20px;">
                    <div style="color: white;">Helps</div>
                    <div style="color: #999999;">Contact</div>
                    <div style="color: #999999;">Faqs</div>
                    <div style="color: #999999;">Terms & Condition</div>
                    <div style="color: #999999;">Privacy Policy</div>
                </div>
                <div style="margin-top: 46px;display:flex;flex-direction:column;gap: 20px;">
                    <div style="color: white;">Categories</div>
                    <div style="color: #999999;">Office Series</div>
                    <div style="color: #999999;">File Series</div>
                    <div style="color: #999999;">School Series</div>
                    <div style="color: #999999;">Vivid Series</div>
                </div>
                <div style="margin-top: 46px;display:flex;flex-direction:column;gap: 20px;">
                    <div style="color: white;">Contact us</div>
                    <div style="color: #999999;">
                        404,4TH floor crown heights
                        <br />
                        Rohini sector- 10,
                        <br />
                        New Delhi - 110085
                    </div>
                    <div style="color: #999999;">Phone: 9953130844</div>
                </div>
            </div>
            <hr />
            <div style="text-align: center;color:#999999">
                Infinity Stationary © 2024
            </div>
        </div>
    </div>
</body>

</html>