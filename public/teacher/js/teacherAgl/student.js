app.controller('studentsAdControl', ['$scope', '$http', 'filterFilter', function ($scope, $http, filterFilter) {
    $scope.stus = [];
    $scope.clas = [];
    $scope.totalItems = 0;
    $scope.currentPage = 1;
    $scope.entryLimit = 10;
    $scope.noOfPages = 5;
    $scope.search = {};
    $scope.listnational = [{
            "country": "Peru",
            "nationality": "Peruvian"
        },
        {
            "country": "Brazil",
            "nationality": "Brazilian"
        },
        {
            "country": "Libya",
            "nationality": "Libyan"
        },
        {
            "country": "San Marino",
            "nationality": "Sammarinese"
        },
        {
            "country": "Thailand",
            "nationality": "Thai"
        },
        {
            "country": "Malaysia",
            "nationality": "Malaysian"
        },
        {
            "country": "Paraguay",
            "nationality": "Paraguayan"
        },
        {
            "country": "Namibia",
            "nationality": "Namibian"
        },
        {
            "country": "Slovakia",
            "nationality": "Slovak"
        },
        {
            "country": "China",
            "nationality": "Chinese"
        },
        {
            "country": "Honduras",
            "nationality": "Honduran"
        },
        {
            "country": "Uganda",
            "nationality": "Ugandan"
        },
        {
            "country": "Indonesia",
            "nationality": "Indonesian"
        },
        {
            "country": "South Georgia and the South Sandwich Islands",
            "nationality": "South Georgia and the South Sandwich Islander"
        },
        {
            "country": "Yemen",
            "nationality": "Yemeni"
        },
        {
            "country": "Azerbaijan",
            "nationality": "Azerbaijani"
        },
        {
            "country": "Israel",
            "nationality": "Israeli"
        },
        {
            "country": "Singapore",
            "nationality": "Singaporean"
        },
        {
            "country": "United Arab Emirates",
            "nationality": "Emirati"
        },
        {
            "country": "Bolivia (Plurinational State of)",
            "nationality": "Bolivian"
        },
        {
            "country": "Ireland",
            "nationality": "Irish"
        },
        {
            "country": "Central African Republic",
            "nationality": "Central African"
        },
        {
            "country": "French Polynesia",
            "nationality": "French Polynesian"
        },
        {
            "country": "Grenada",
            "nationality": "Grenadian"
        },
        {
            "country": "Guinea-Bissau",
            "nationality": "Guinea-Bissauan"
        },
        {
            "country": "Nepal",
            "nationality": "Nepalese"
        },
        {
            "country": "Panama",
            "nationality": "Panamanian"
        },
        {
            "country": "Burkina Faso",
            "nationality": "Burkinabe"
        },
        {
            "country": "Cambodia",
            "nationality": "Cambodian"
        },
        {
            "country": "Uzbekistan",
            "nationality": "Uzbekistani"
        },
        {
            "country": "Anguilla",
            "nationality": "Anguillian"
        },
        {
            "country": "Korea (Republic of)",
            "nationality": "South Korean"
        },
        {
            "country": "Curaçao",
            "nationality": "Curaçaoan"
        },
        {
            "country": "Wallis and Futuna",
            "nationality": "Wallis and Futuna Islander"
        },
        {
            "country": "Myanmar",
            "nationality": "Burmese"
        },
        {
            "country": "Egypt",
            "nationality": "Egyptian"
        },
        {
            "country": "Gambia",
            "nationality": "Gambian"
        },
        {
            "country": "Saudi Arabia",
            "nationality": "Saudi Arabian"
        },
        {
            "country": "Argentina",
            "nationality": "Argentinean"
        },
        {
            "country": "Canada",
            "nationality": "Canadian"
        },
        {
            "country": "Montenegro",
            "nationality": "Montenegrin"
        },
        {
            "country": "United States of America",
            "nationality": "American"
        },
        {
            "country": "Cook Islands",
            "nationality": "Cook Islander"
        },
        {
            "country": "Macao",
            "nationality": "Macanese"
        },
        {
            "country": "Cocos (Keeling) Islands",
            "nationality": "Cocos Islander"
        },
        {
            "country": "Saint Lucia",
            "nationality": "Saint Lucian"
        },
        {
            "country": "Cyprus",
            "nationality": "Cypriot"
        },
        {
            "country": "Iceland",
            "nationality": "Icelander"
        },
        {
            "country": "Côte d'Ivoire",
            "nationality": "Ivorian"
        },
        {
            "country": "Bangladesh",
            "nationality": "Bangladeshi"
        },
        {
            "country": "Bhutan",
            "nationality": "Bhutanese"
        },
        {
            "country": "Saint Kitts and Nevis",
            "nationality": "Kittian and Nevisian"
        },
        {
            "country": "Finland",
            "nationality": "Finnish"
        },
        {
            "country": "Macedonia (the former Yugoslav Republic of)",
            "nationality": "Macedonian"
        },
        {
            "country": "Qatar",
            "nationality": "Qatari"
        },
        {
            "country": "Sudan",
            "nationality": "Sudanese"
        },
        {
            "country": "Isle of Man",
            "nationality": "Manx"
        },
        {
            "country": "Latvia",
            "nationality": "Latvian"
        },
        {
            "country": "Timor-Leste",
            "nationality": "East Timorese"
        },
        {
            "country": "Sao Tome and Principe",
            "nationality": "Sao Tomean"
        },
        {
            "country": "Sweden",
            "nationality": "Swedish"
        },
        {
            "country": "Martinique",
            "nationality": "Martinican"
        },
        {
            "country": "Sierra Leone",
            "nationality": "Sierra Leonean"
        },
        {
            "country": "South Africa",
            "nationality": "South African"
        },
        {
            "country": "Tanzania, United Republic of",
            "nationality": "Tanzanian"
        },
        {
            "country": "Costa Rica",
            "nationality": "Costa Rican"
        },
        {
            "country": "Iran (Islamic Republic of)",
            "nationality": "Iranian"
        },
        {
            "country": "Dominican Republic",
            "nationality": "Dominican"
        },
        {
            "country": "Nigeria",
            "nationality": "Nigerian"
        },
        {
            "country": "Palestine, State of",
            "nationality": "Palestinian"
        },
        {
            "country": "Bosnia and Herzegovina",
            "nationality": "Bosnian, Herzegovinian"
        },
        {
            "country": "Cayman Islands",
            "nationality": "Caymanian"
        },
        {
            "country": "Maldives",
            "nationality": "Maldivan"
        },
        {
            "country": "Japan",
            "nationality": "Japanese"
        },
        {
            "country": "Chad",
            "nationality": "Chadian"
        },
        {
            "country": "Guinea",
            "nationality": "Guinean"
        },
        {
            "country": "Madagascar",
            "nationality": "Malagasy"
        },
        {
            "country": "Italy",
            "nationality": "Italian"
        },
        {
            "country": "Jordan",
            "nationality": "Jordanian"
        },
        {
            "country": "Liechtenstein",
            "nationality": "Liechtensteiner"
        },
        {
            "country": "Mongolia",
            "nationality": "Mongolian"
        },
        {
            "country": "Tonga",
            "nationality": "Tongan"
        },
        {
            "country": "Ecuador",
            "nationality": "Ecuadorean"
        },
        {
            "country": "Guam",
            "nationality": "Guamanian"
        },
        {
            "country": "Kuwait",
            "nationality": "Kuwaiti"
        },
        {
            "country": "Kyrgyzstan",
            "nationality": "Kirghiz"
        },
        {
            "country": "Mauritius",
            "nationality": "Mauritian"
        },
        {
            "country": "Åland Islands",
            "nationality": "Ålandish"
        },
        {
            "country": "Bahrain",
            "nationality": "Bahraini"
        },
        {
            "country": "Mexico",
            "nationality": "Mexican"
        },
        {
            "country": "Poland",
            "nationality": "Polish"
        },
        {
            "country": "Chile",
            "nationality": "Chilean"
        },
        {
            "country": "Djibouti",
            "nationality": "Djibouti"
        },
        {
            "country": "Ethiopia",
            "nationality": "Ethiopian"
        },
        {
            "country": "Mauritania",
            "nationality": "Mauritanian"
        },
        {
            "country": "Korea (Democratic People's Republic of)",
            "nationality": "North Korean"
        },
        {
            "country": "Swaziland",
            "nationality": "Swazi"
        },
        {
            "country": "Aruba",
            "nationality": "Aruban"
        },
        {
            "country": "Austria",
            "nationality": "Austrian"
        },
        {
            "country": "Haiti",
            "nationality": "Haitian"
        },
        {
            "country": "Portugal",
            "nationality": "Portuguese"
        },
        {
            "country": "Vanuatu",
            "nationality": "Ni-Vanuatu"
        },
        {
            "country": "Christmas Island",
            "nationality": "Christmas Island"
        },
        {
            "country": "Colombia",
            "nationality": "Colombian"
        },
        {
            "country": "Cuba",
            "nationality": "Cuban"
        },
        {
            "country": "French Guiana",
            "nationality": "French Guianese"
        },
        {
            "country": "Afghanistan",
            "nationality": "Afghan"
        },
        {
            "country": "Brunei Darussalam",
            "nationality": "Bruneian"
        },
        {
            "country": "Jamaica",
            "nationality": "Jamaican"
        },
        {
            "country": "Moldova (Republic of)",
            "nationality": "Moldovan"
        },
        {
            "country": "France",
            "nationality": "French"
        },
        {
            "country": "Kenya",
            "nationality": "Kenyan"
        },
        {
            "country": "Oman",
            "nationality": "Omani"
        },
        {
            "country": "Albania",
            "nationality": "Albanian"
        },
        {
            "country": "Cabo Verde",
            "nationality": "Cape Verdian"
        },
        {
            "country": "Turkey",
            "nationality": "Turkish"
        },
        {
            "country": "Zimbabwe",
            "nationality": "Zimbabwean"
        },
        {
            "country": "Algeria",
            "nationality": "Algerian"
        },
        {
            "country": "Niger",
            "nationality": "Nigerien"
        },
        {
            "country": "Hungary",
            "nationality": "Hungarian"
        },
        {
            "country": "Spain",
            "nationality": "Spanish"
        },
        {
            "country": "Germany",
            "nationality": "German"
        },
        {
            "country": "Guatemala",
            "nationality": "Guatemalan"
        },
        {
            "country": "Mozambique",
            "nationality": "Mozambican"
        },
        {
            "country": "Palau",
            "nationality": "Palauan"
        },
        {
            "country": "Lesotho",
            "nationality": "Mosotho"
        },
        {
            "country": "Marshall Islands",
            "nationality": "Marshallese"
        },
        {
            "country": "Suriname",
            "nationality": "Surinamer"
        },
        {
            "country": "Guyana",
            "nationality": "Guyanese"
        },
        {
            "country": "Sri Lanka",
            "nationality": "Sri Lankan"
        },
        {
            "country": "Lebanon",
            "nationality": "Lebanese"
        },
        {
            "country": "Mayotte",
            "nationality": "Mahoran"
        },
        {
            "country": "Samoa",
            "nationality": "Samoan"
        },
        {
            "country": "Solomon Islands",
            "nationality": "Solomon Islander"
        },
        {
            "country": "Denmark",
            "nationality": "Danish"
        },
        {
            "country": "Kiribati",
            "nationality": "I-Kiribati"
        },
        {
            "country": "Switzerland",
            "nationality": "Swiss"
        },
        {
            "country": "Lithuania",
            "nationality": "Lithuanian"
        },
        {
            "country": "Somalia",
            "nationality": "Somali"
        },
        {
            "country": "Norfolk Island",
            "nationality": "Norfolk Islander"
        },
        {
            "country": "Taiwan",
            "nationality": "Taiwanese"
        },
        {
            "country": "Ghana",
            "nationality": "Ghanaian"
        },
        {
            "country": "New Zealand",
            "nationality": "New Zealander"
        },
        {
            "country": "Senegal",
            "nationality": "Senegalese"
        },
        {
            "country": "Togo",
            "nationality": "Togolese"
        },
        {
            "country": "Zambia",
            "nationality": "Zambian"
        },
        {
            "country": "Belarus",
            "nationality": "Belarusian"
        },
        {
            "country": "Saint Vincent and the Grenadines",
            "nationality": "Saint Vincentian"
        },
        {
            "country": "El Salvador",
            "nationality": "Salvadoran"
        },
        {
            "country": "Norway",
            "nationality": "Norwegian"
        },
        {
            "country": "Malta",
            "nationality": "Maltese"
        },
        {
            "country": "Nicaragua",
            "nationality": "Nicaraguan"
        },
        {
            "country": "Australia",
            "nationality": "Australian"
        },
        {
            "country": "Luxembourg",
            "nationality": "Luxembourger"
        },
        {
            "country": "Pakistan",
            "nationality": "Pakistani"
        },
        {
            "country": "Saint Helena, Ascension and Tristan da Cunha",
            "nationality": "Saint Helenian"
        },
        {
            "country": "Turks and Caicos Islands",
            "nationality": "Turks and Caicos Islander"
        },
        {
            "country": "Western Sahara",
            "nationality": "Sahrawi"
        },
        {
            "country": "Belgium",
            "nationality": "Belgian"
        },
        {
            "country": "Eritrea",
            "nationality": "Eritrean"
        },
        {
            "country": "Seychelles",
            "nationality": "Seychellois"
        },
        {
            "country": "Antigua and Barbuda",
            "nationality": "Antiguan, Barbudan"
        },
        {
            "country": "Liberia",
            "nationality": "Liberian"
        },
        {
            "country": "Tuvalu",
            "nationality": "Tuvaluan"
        },
        {
            "country": "Bermuda",
            "nationality": "Bermudian"
        },
        {
            "country": "Cameroon",
            "nationality": "Cameroonian"
        },
        {
            "country": "Saint Pierre and Miquelon",
            "nationality": "Saint-Pierrais"
        },
        {
            "country": "Ukraine",
            "nationality": "Ukrainian"
        },
        {
            "country": "Georgia",
            "nationality": "Georgian"
        },
        {
            "country": "Netherlands",
            "nationality": "Dutch"
        },
        {
            "country": "Mali",
            "nationality": "Malian"
        },
        {
            "country": "Niue",
            "nationality": "Niuean"
        },
        {
            "country": "Puerto Rico",
            "nationality": "Puerto Rican"
        },
        {
            "country": "United Kingdom of Great Britain and Northern Ireland",
            "nationality": "British"
        },
        {
            "country": "Armenia",
            "nationality": "Armenian"
        },
        {
            "country": "Greenland",
            "nationality": "Greenlandic"
        },
        {
            "country": "Kazakhstan",
            "nationality": "Kazakhstani"
        },
        {
            "country": "Réunion",
            "nationality": "Réunionese"
        },
        {
            "country": "Saint Martin (French part)",
            "nationality": "Saint Martin Islander"
        },
        {
            "country": "Belize",
            "nationality": "Belizean"
        },
        {
            "country": "Greece",
            "nationality": "Greek"
        },
        {
            "country": "Trinidad and Tobago",
            "nationality": "Trinidadian"
        },
        {
            "country": "Benin",
            "nationality": "Beninese"
        },
        {
            "country": "Tajikistan",
            "nationality": "Tadzhik"
        },
        {
            "country": "Czech Republic",
            "nationality": "Czech"
        },
        {
            "country": "India",
            "nationality": "Indian"
        },
        {
            "country": "Lao People's Democratic Republic",
            "nationality": "Laotian"
        },
        {
            "country": "Syrian Arab Republic",
            "nationality": "Syrian"
        },
        {
            "country": "Turkmenistan",
            "nationality": "Turkmen"
        },
        {
            "country": "Botswana",
            "nationality": "Motswana"
        },
        {
            "country": "Virgin Islands (British)",
            "nationality": "Virgin Islander (British)"
        },
        {
            "country": "American Samoa",
            "nationality": "American Samoan"
        },
        {
            "country": "Guadeloupe",
            "nationality": "Guadeloupian"
        },
        {
            "country": "New Caledonia",
            "nationality": "New Caledonian"
        },
        {
            "country": "Việt Nam",
            "nationality": "Vietnamese"
        },
        {
            "country": "Comoros",
            "nationality": "Comoran"
        },
        {
            "country": "Micronesia (Federated States of)",
            "nationality": "Micronesian"
        },
        {
            "country": "Burundi",
            "nationality": "Burundian"
        },
        {
            "country": "Morocco",
            "nationality": "Moroccan"
        },
        {
            "country": "Saint Barthélemy",
            "nationality": "Saint Barthélemy Islander"
        },
        {
            "country": "Barbados",
            "nationality": "Barbadian"
        },
        {
            "country": "Virgin Islands (U.S.)",
            "nationality": "Virgin Islander (U.S.)"
        },
        {
            "country": "Iraq",
            "nationality": "Iraqi"
        },
        {
            "country": "Papua New Guinea",
            "nationality": "Papua New Guinean"
        },
        {
            "country": "Equatorial Guinea",
            "nationality": "Equatorial Guinean"
        },
        {
            "country": "Gabon",
            "nationality": "Gabonese"
        },
        {
            "country": "Uruguay",
            "nationality": "Uruguayan"
        },
        {
            "country": "Monaco",
            "nationality": "Monegasque"
        },
        {
            "country": "Tunisia",
            "nationality": "Tunisian"
        },
        {
            "country": "Fiji",
            "nationality": "Fijian"
        },
        {
            "country": "Rwanda",
            "nationality": "Rwandan"
        },
        {
            "country": "Angola",
            "nationality": "Angolan"
        },
        {
            "country": "Falkland Islands (Malvinas)",
            "nationality": "Falkland Islander"
        },
        {
            "country": "Serbia",
            "nationality": "Serbian"
        },
        {
            "country": "Slovenia",
            "nationality": "Slovenian"
        },
        {
            "country": "Congo (Democratic Republic of the)",
            "nationality": "Congolese (Democratic Republic)"
        },
        {
            "country": "Malawi",
            "nationality": "Malawian"
        },
        {
            "country": "Venezuela (Bolivarian Republic of)",
            "nationality": "Venezuelan"
        },
        {
            "country": "Bulgaria",
            "nationality": "Bulgarian"
        },
        {
            "country": "Hong Kong",
            "nationality": "Hong Kongese"
        },
        {
            "country": "Gibraltar",
            "nationality": "Gibraltar"
        },
        {
            "country": "South Sudan",
            "nationality": "South Sudanese"
        },
        {
            "country": "Nauru",
            "nationality": "Nauruan"
        },
        {
            "country": "Pitcairn",
            "nationality": "Pitcairn Islander"
        },
        {
            "country": "Russian Federation",
            "nationality": "Russian"
        },
        {
            "country": "Andorra",
            "nationality": "Andorran"
        },
        {
            "country": "Faroe Islands",
            "nationality": "Faroese"
        },
        {
            "country": "Congo",
            "nationality": "Congolese"
        },
        {
            "country": "Croatia",
            "nationality": "Croatian"
        },
        {
            "country": "Montserrat",
            "nationality": "Montserratian"
        },
        {
            "country": "Philippines",
            "nationality": "Filipino"
        },
        {
            "country": "Republic of Kosovo",
            "nationality": "Kosovar"
        },
        {
            "country": "Romania",
            "nationality": "Romanian"
        },
        {
            "country": "Tokelau",
            "nationality": "Tokelauan"
        },
        {
            "country": "Bahamas",
            "nationality": "Bahamian"
        },
        {
            "country": "Estonia",
            "nationality": "Estonian"
        }
    ]
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/students"
    }).then(function (data) {
        $scope.stus = data.data;
        $scope.totalItems = $scope.stus.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
    });

    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/classs"
    }).then(function (data) {
        $scope.clas = data.data;
    });

    $scope.resetFilters = function () {
        $scope.search = {};
    };
    $scope.$watch('search', function (newVal, oldVal) {
        $scope.filtered = filterFilter($scope.stus, newVal);
        $scope.totalItems = $scope.filtered.length;
        // $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        $scope.currentPage = 1;
    }, true);

    $scope.reloadData = function () {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/students"

        }).then(function (data) {
            $scope.stus = data.data;
        });
    }
    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/students",
                data: $scope.stu,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Thêm thành công!");
                console.log(res.data);
            });
        } else {

            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/students/" + $scope.id,
                data: $scope.stu,
                'content-Type': "application/json"
            }).then(function (res) {
                alert("Cập nhật thành công!");
                console.log(res.data);
            });
        }
        $scope.reloadData();
    }
    $scope.deleteClick = function (id) {
        var hoi = confirm("Bạn có chắc chắn muốn xóa không?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/students/" + id

            }).then(function (data) {
                alert("Xóa thành công!");
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    $scope.showModal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Học sinh mới";
            $scope.modalButton = "Thêm mới";
            if ($scope.stu) {
                //$scope.stu.ID_Permission = "Q05";
                $scope.stu.ID_Class = "";
                $scope.stu.Name_Student = "";
                $scope.stu.Birth_Student = "";
                $scope.stu.Gender_Student = "";
                $scope.stu.National_Student = "";
                $scope.stu.Ethnic_Student = "";
                $scope.stu.Religion_Student = "";
                $scope.stu.Address_Student = "";
                $scope.stu.Insurance_Student = "";
                $scope.stu.School_Year = "";
                $scope.stu.Phone_Student = "";
                $scope.stu.Mail_Student = "";
                $scope.stu.Img_Student = "";
                $scope.stu.Pass_Student = "";
                $scope.stu.Status_Student = "";
            }
        } else {
            document.getElementById('passstus').style.display = "none";
            $scope.modalTitle = "Cập nhật thông tin Học sinh";
            $scope.modalButton = "Cập nhật";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/students/" + id

            }).then(function (data) {
                $scope.stu = data.data;
            });
        }
    }

    $scope.showModalCT = function (id) {
        $scope.modalTitleCT = "Thông tin chi tiết Học sinh";
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/students/" + id

        }).then(function (data) {
            $scope.stu = data.data;
        });
    }
}]);
