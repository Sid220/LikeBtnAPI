const likeBtnAPI =
    {
        nFormatter: function(num, digits) {
            const lookup = [
                { value: 1, symbol: "" },
                { value: 1e3, symbol: "k" },
                { value: 1e6, symbol: "M" },
                { value: 1e9, symbol: "G" },
                { value: 1e12, symbol: "T" },
                { value: 1e15, symbol: "P" },
                { value: 1e18, symbol: "E" }
            ];
            const rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
            var item = lookup.slice().reverse().find(function(item) {
                return num >= item.value;
            });
            return item ? (num / item.value).toFixed(digits).replace(rx, "$1") + item.symbol : "0";
        },
        commaAdder: function(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        },
        button: document.getElementById("likebtnapi-main"),
        regularNumber: 'off',
        rootUrl: "http://localhost:8000",
        likeSvg: "<span class='likebtnapi-icon'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hand-thumbs-up\" viewBox=\"0 0 16 16\">\n" +
            "  <path d=\"M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z\"/>\n" +
            "</svg></span>",
        likeSvgFill: "<span class='likebtnapi-icon clicked'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hand-thumbs-up-fill\" viewBox=\"0 0 16 16\">\n" +
            "  <path d=\"M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z\"/>\n" +
            "</svg></span>",
        likeText: "Like",
        websiteId: "KO",
        websiteUrl: "KO",
        dontShowCount: "off",
        main: async function (website, iconSet) {
            this.websiteId = website;
            const urlReq = await fetch(this.rootUrl + "/api/get-website?website=" + this.websiteId);
            const urls = await urlReq.json();
            if(typeof urls.website !== "undefined") {
                likeBtnAPI.websiteUrl = urls.website + "|" + this.rootUrl;
            }
            else {
                throw new Error();
            }
            this.showLikes();
            let link = document.createElement("link");
            link.href = this.rootUrl + "/LikeBtnAPIJS/likebtnapi.css";
            link.rel = "stylesheet";
            document.head.appendChild(link);
            if (localStorage.getItem("likebtnapi-liked") === null) {
                localStorage.setItem("likebtnapi-liked", "0");
            }

            if (iconSet === 'fontawesome') {
                this.likeSvgFill = "<span class='likebtnapi-icon clicked'><svg fill=\"currentColor\" width=\"16\" height='16' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 25.3-19.5 46-44.3 47.9c7.7 8.5 12.3 19.8 12.3 32.1c0 23.4-16.8 42.9-38.9 47.1c4.4 7.2 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z\"/></svg></span>";
                this.likeSvg = "<span class='likebtnapi-icon'><svg fill=\"currentColor\" width=\"16\" height='16' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M96 191.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V223.1C128 206.3 113.7 191.1 96 191.1zM512 227c0-36.89-30.05-66.92-66.97-66.92h-99.86C354.7 135.1 360 113.5 360 100.8c0-33.8-26.2-68.78-70.06-68.78c-46.61 0-59.36 32.44-69.61 58.5c-31.66 80.5-60.33 66.39-60.33 93.47c0 12.84 10.36 23.99 24.02 23.99c5.256 0 10.55-1.721 14.97-5.26c76.76-61.37 57.97-122.7 90.95-122.7c16.08 0 22.06 12.75 22.06 20.79c0 7.404-7.594 39.55-25.55 71.59c-2.046 3.646-3.066 7.686-3.066 11.72c0 13.92 11.43 23.1 24 23.1h137.6C455.5 208.1 464 216.6 464 227c0 9.809-7.766 18.03-17.67 18.71c-12.66 .8593-22.36 11.4-22.36 23.94c0 15.47 11.39 15.95 11.39 28.91c0 25.37-35.03 12.34-35.03 42.15c0 11.22 6.392 13.03 6.392 22.25c0 22.66-29.77 13.76-29.77 40.64c0 4.515 1.11 5.961 1.11 9.456c0 10.45-8.516 18.95-18.97 18.95h-52.53c-25.62 0-51.02-8.466-71.5-23.81l-36.66-27.51c-4.315-3.245-9.37-4.811-14.38-4.811c-13.85 0-24.03 11.38-24.03 24.04c0 7.287 3.312 14.42 9.596 19.13l36.67 27.52C235 468.1 270.6 480 306.6 480h52.53c35.33 0 64.36-27.49 66.8-62.2c17.77-12.23 28.83-32.51 28.83-54.83c0-3.046-.2187-6.107-.6406-9.122c17.84-12.15 29.28-32.58 29.28-55.28c0-5.311-.6406-10.54-1.875-15.64C499.9 270.1 512 250.2 512 227z\"/></svg></span>";
            }
            if (iconSet === 'star') {
                this.likeSvg = "<span class='likebtnapi-icon'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\">\n" +
                    "  <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>\n" +
                    "</svg></span>";
                this.likeSvgFill = "<span class='likebtnapi-icon clicked'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">\n" +
                    "  <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>\n" +
                    "</svg></span>";
            }
            if (iconSet === "star-fontawesome") {
                this.likeSvg = "<span class='likebtnapi-icon'><svg fill=\"currentColor\" width=\"16\" height='16' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z\"/></svg></span>";
                this.likeSvgFill = "<span class='likebtnapi-icon clicked'><svg fill=\"currentColor\" width=\"16\" height='16' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z\"/></svg></span>";
            }
            if (iconSet === "heart") {
                this.likeSvg = "<span class='likebtnapi-icon'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-heart\" viewBox=\"0 0 16 16\">\n" +
                    "  <path d=\"m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"/>\n" +
                    "</svg></span>";
                this.likeSvgFill = "<span class='likebtnapi-icon clicked'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-heart-fill\" viewBox=\"0 0 16 16\">\n" +
                    "  <path fill-rule=\"evenodd\" d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z\"/>\n" +
                    "</svg></span>";
            }
            if (iconSet === "heart-fontawesome") {
                this.likeSvg = "<span class='likebtnapi-icon'><svg fill=\"currentColor\" width=\"16\" height='16' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z\"/></svg></span>"
                this.likeSvgFill = "<span class='likebtnapi-icon clicked'><svg fill=\"currentColor\" width=\"16\" height=\"16\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z\"/></svg></span>";
            }
            if (iconSet === "facebook") {
                this.likeSvg = "<img style=\"display: inline;\" src=\"https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/FEppCFCt76d.png\"/>";
                this.likeSvgFill = "<img style=\"display: inline;\" src=\"https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/FEppCFCt76d.png\"/>";
            }
            if(iconSet === "default") {
                this.likeSvg = "<span class='likebtnapi-icon'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hand-thumbs-up\" viewBox=\"0 0 16 16\">\n" +
                "  <path d=\"M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z\"/>\n" +
                "</svg></span>";
                this.likeSvgFill = "<span class='likebtnapi-icon clicked'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hand-thumbs-up-fill\" viewBox=\"0 0 16 16\">\n" +
                "  <path d=\"M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z\"/>\n" +
                "</svg></span>";
            }

            if (this.button) {
                if (this.button.nodeName === "DIV") {
                    let urls = this.websiteUrl.split("|");
                    let match = urls.some(element => {
                        if (window.location.href.includes(element)) {
                            return true;
                        }

                        return false;
                    });
                    console.log(match);
                    if(match) {
                        this.button.innerHTML = this.likeSvg + " <span>" + this.likeText + "</span>";
                        this.button.ariaRoleDescription = "button";
                        this.button.addEventListener("click", () => {
                            if (localStorage.getItem("likebtnapi-liked") === "0") {
                                fetch(this.rootUrl + "/api/set-likes?website=" + this.websiteId + "&url=" + window.location.href)
                                    .then((response) => response.json())
                                    .then((data) => {
                                        if(likeBtnAPI.dontShowCount === "on") {
                                            this.button.innerHTML = this.likeSvgFill + " <span>" + likeBtnAPI.likeText + "</span>";
                                        }
                                        else {
                                            this.button.innerHTML = this.likeSvgFill + " <span>" + (this.regularNumber === 'off' ? this.nFormatter(data.likes, 1) : this.commaAdder(data.likes)) + "</span>";
                                        }
                                    });
                                localStorage.setItem("likebtnapi-liked", "1");
                            } else if (localStorage.getItem("likebtnapi-liked") === "1") {
                                fetch(this.rootUrl + "/api/del-likes?website=" + this.websiteId + "&url=" + window.location.href)
                                    .then((response) => response.json())
                                    .then((data) => {
                                        this.button.innerHTML = this.likeSvg + " <span>" + this.likeText + "</span>";
                                    });
                                localStorage.setItem("likebtnapi-liked", "0");
                            }
                        })
                    }
                    else {
                        console.error("LikeBtnAPI: Website does not match this url. Go into your portal, and edit website '"+ this.websiteId +"' to include the base url of this website.")
                    }
                } else {
                    console.error("LikeBtnAPI: Incorrect element type for button. Button should be a div.")
                }
            } else {
                console.error("LikeBtnAPI: Button not found!")
            }
        },
        showLikes: function () {
            if (localStorage.getItem("likebtnapi-liked") === "1") {
                fetch("http://localhost:8000/api/get-likes?website=" + this.websiteId + "&url=" + window.location.href)
                    .then((response) => response.json())
                    .then((data) => {
                        if(likeBtnAPI.dontShowCount === "on") {
                            this.button.innerHTML = this.likeSvgFill + " <span>" + likeBtnAPI.likeText + "</span>";
                        }
                        else {
                            this.button.innerHTML = this.likeSvgFill + " <span>" + (this.regularNumber === 'off' ? this.nFormatter(data.likes, 1) : this.commaAdder(data.likes)) + "</span>";
                        }
                    });
            }
        }
    }
// Add custom text
// likeBtnAPI.likeText = "Star";
// Custom text in symbol
// likeBtnAPI.likeSvg = "hi";
// likeBtnAPI.likeSvgFill = "hi!";
