<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StartUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ===== TRUNCATE TABLES =====
        DB::table('applicant_reports')->truncate();
        DB::table('careers')->truncate();
        DB::table('certification_awards')->truncate();
        DB::table('company_history')->truncate();
        DB::table('company_information')->truncate();
        DB::table('company_services')->truncate();
        DB::table('inquiry_reports')->truncate();
        DB::table('project_category')->truncate();
        DB::table('projects')->truncate();
        DB::table('system_settings')->truncate();
        DB::table('system_settings')->truncate();
        DB::table('users')->truncate();
        DB::table('website_users')->truncate();
        // ===== END TRUNCATE TABLES =====


        // ===== USERS =====
        $usersData = [
            [
                'id' => 1,
                'name' => 'System Administrator',
                'email' => 'admin@dalkiainc.com',
                'email_verified_at' => now(),
                'role' => 'System Administrator',
                'password' => Hash::make('admin123'),
                'remember_token' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Super Administrator',
                'email' => 'superadmin@dalkiainc.com',
                'email_verified_at' => now(),
                'role' => 'Super Administrator',
                'password' => Hash::make('superadmin123'),
                'remember_token' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('users')->insert($usersData);
        // ===== END USERS =====

        // ===== COMPANY INFORMATION =====
        $companyInformationData = [
            [
                'id' => 1,
                'company_overview' => "<p><strong>DALKIA Incorporated</strong> is a corporation established to cater the demand in the design, fabrication, and installation of Curtain Walls, Windows, Doors and Metal Cladding for all types of buildings. Driven by passion to work and aspiration,&nbsp;</p><p>&nbsp;</p><p>DALKIA Incorporated is aiming high to become a contractor that offers a complete services and a solution provider in the building facade industry. DALKIA Incorporated is empowered by the Faith, Experience, Determination and Skills of the people and every individual behind the Company together with the unwavering supports and partnership of reliable suppliers to deliver a complete and successful performance in every undertaking.</p><p>&nbsp;</p><p>That is why and how DALKIA Incorporated makes a difference.&nbsp;</p>",
                'mission' => "Deliver with passion all our undertakings to the fullest expectation of the client while adhering to the safety of all the people and the environment we are working with.",
                'vision' => "Become a leading and highly regarded contracting company in building facade construction.",
                'quality_policy' => "<p><strong>Dalkia Incorporated</strong> shall pursue sustainable growth by continuously developing products and providing reliable services of quality, safe, top of the line, and superior range of curtain walls, windows &amp; metal cladding.​&nbsp;<br><br>Our endeavors shall focus on:​&nbsp;</p><ol><li>Developing and sustaining constructive relationship with our clients thru effective customer care all throughout the engagement&nbsp;</li><li>Continuously enhancing the competency of our employees through trainings to meet current and future industry demands&nbsp;</li><li>Providing quality products by adapting a systematic procurement procedure and partnering with reliable suppliers of quality materials&nbsp;</li><li>Maintaining our status as a leader in our field of expertise by using “Top of the Line” equipments and software in our design, engineering and fabrication and by acquiring certification and recognition from international organizations on operational excellence and green building initiatives&nbsp;</li><li>Ensuring the improvement of our quality management system by communication our quality policy to all levels of our organization by measuring our products and services against industry standards, and&nbsp;</li><li>Meeting customer, regulatory, statutory and the ISO 9001:2015 standard requirements</li></ol>",
                'brief_description' => "<p><strong>DALKIA Inc. </strong>designs and installs building facades, aiming to be a top industry solution with reliable service and delivery.</p>",
                'address' => "W4 RDC Business Complex Mercedes Ave., Brgy. San Andres, Cainta Rizal",
                'contact_number' => "(632) 655-0030/477-1585",
                'email_address' => "info@dalkiainc.com",
                'business_hours' => "9:00 AM - 6:00 PM",
                'facebook_link' => '#',
                'instagram_link' => '#',
                'twitter_link' => '#'
            ]
        ];
        DB::table('company_information')->insert($companyInformationData);
        // ===== END COMPANY INFORMATION =====

        // ===== COMPANY HISTORY =====
        $companyHistoryData = [
            [
                'id' => 1,
                'year' => 2012,
                'description' => "<ul><li>October – Establishment of the company&nbsp;</li><li>November – Acquisition of Fabrication Machines&nbsp;</li><li>December – Testing and Commissioning of Fabrication Plant in Cainta, Rizal</li></ul>"
            ],
            [
                'id' => 2,
                'year' => 2015,
                'description' => "<ul><li>Dalkia Employees became Certified NFRC – ACE&nbsp;</li><li>Acquired Certification ISO 9001.2015&nbsp;</li><li>Became a Member of US Green Building</li><li>Acquisition of 1 unit of 3 axis CNC Machining Center&nbsp;</li><li>Acquisition of 1 unit of 50-meter Curtainwall Glazing Conveyor</li></ul>"
            ],
            [
                'id' => 3,
                'year' => 2016,
                'description' => "<ul><li>Acquisition of 2 units of 4 axis CNC Machining Center&nbsp;</li><li>Acquisition of 2 unit of Double Head Aluminum of Cutting Machine.&nbsp;</li><li>Composite Panel Processing Center&nbsp;</li><li>Expand Production and Warehouse area from 4,100m2 to 25,600m2</li></ul>"
            ],
            [
                'id' => 4,
                'year' => 2017,
                'description' => "<ul><li>Became a Council Member of Philippine Green Building Council</li></ul>"
            ],
            [
                'id' => 5,
                'year' => 2020,
                'description' => "<ul><li>Establishment of 15,000 s.q.m production and warehouse facilities in Cebu.</li></ul>"
            ],
            [
                'id' => 6,
                'year' => 2021,
                'description' => "<ul><li>June 1 – Acquired Patent registration of Window System (P.R # 2-2021-050613)</li></ul>"
            ],
            [
                'id' => 7,
                'year' => 2022,
                'description' => "<ul><li>Completed 92 projects since the day of incorporation</li></ul>"
            ],
            [
                'id' => 8,
                'year' => 2023,
                'description' => "<ul><li>15 on-going projects ending year 2023</li></ul>"
            ],
            [
                'id' => 9,
                'year' => 2024,
                'description' => "<ul><li>8 newly awarded projects since January</li></ul>"
            ]
        ];
        DB::table('company_history')->insert($companyHistoryData);
        // ===== END COMPANY HISTORY =====

        // ===== SCOPE AND SERVICES =====
        $companyServicesData = [
            [
                'id' => 1,
                'title' => "Design Consultancy",
                'description' => "We plan together for successful projects, providing expert guidance and collaborative design solutions.",
                'status' => 1,
                'image' => "design.jpg"
            ],
            [
                'id' => 2,
                'title' => "Detailed Design & Engineering",
                'description' => "From concept to completion, our precise plans and engineering ensure seamless construction.",
                'status' => 1,
                'image' => "engineering.png"
            ],
            [
                'id' => 3,
                'title' => "Procurement, Assembly & Installation",
                'description' => "We handle it all - sourcing, assembly, and installation for exceptional construction outcomes.",
                'status' => 1,
                'image' => "installation.jpg"
            ]
        ];
        DB::table('company_services')->insert($companyServicesData);
        // ===== END SCOPE AND SERVICES =====

        // ===== PROJECT CATEGORY =====
        $projectCategoryData = [
            [
                'id' => 1,
                'name' => "Commercial and Office Buildings"
            ],
            [
                'id' => 2,
                'name' => "Residential Buildings"
            ],
            [
                'id' => 3,
                'name' => "Hotels and Hospitals"    
            ],
            [
                'id' => 4,
                'name' => "Industrial"
            ],
            [
                'id' => 5,
                'name' => "Others"
            ],
        ];
        DB::table('project_category')->insert($projectCategoryData);
        // ===== END PROJECT CATEGORY =====

        // ===== PROJECT =====
        $projectData = [
            [
                'name' => "Alveo Veranda",
                'project_category_id' => 5,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Supply and Installation of Punch Windows, Skylight, Canopy, Glass Railings, Storefronts, Trellis, Frameless Glass Door and Framed Glass Walls",
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-01',
                'end_date' => '2023-06-01'
            ],
            [
                'name' => "West Aeropark Quad 1 Phase 1",
                'project_category_id' => 5,
                'client' => "Global Gateway Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, ACP Cladding, Glass Railing, Storefront, & Glass Canopy",
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-03-01',
                'end_date' => '2023-03-01'
            ],
            [
                'name' => "Marian Chapel",
                'project_category_id' => 5,
                'client' => "Filinvest Land Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Design, Supply & Installation of Roofing System & Skylights",
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2021-04-01',
                'end_date' => '2021-04-01'
            ],
            [
                'name' => "Parkway Corporate Center",
                'project_category_id' => 1,
                'client' => "Filinvest Land Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Windows & Unitized Curtainwall",
                'image' => 'Parkway Corporate Center.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2020-01-01',
                'end_date' => '2020-01-01'
            ],
            [
                'name' => "Estancia Mall Expansion",
                'project_category_id' => 1,
                'client' => "Ortigas & Company Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Windows, Curtainwall and ACP Cladding",
                'image' => 'Estancia Mall Expansion.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2020-10-01',
                'end_date' => '2020-10-01'
            ],
            [
                'name' => "Alhi Corporate Office",
                'project_category_id' => 1,
                'client' => "Posh Properties Development Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, ACP Cladding, Storefront, Louvers",
                'image' => 'Alhi Corporate Office.jpg',
                'status' => 'COMPLETED',
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2020-10-01',
                'end_date' => '2020-10-01'
            ],
            [
                'name' => "One Le Grand Tower",
                'project_category_id' => 1,
                'client' => "Datem Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, Ribbon, Windows, Storefront, Louvers",
                'image' => 'One Le Grand Tower.jpg',
                'status' => 'COMPLETED',
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2020-08-01',
                'end_date' => '2020-08-01'
            ],
            [
                'name' => "Kingsford Hotel",
                'project_category_id' => 3,
                'client' => "Megaworld Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors and Windows, Storefronts and Curtainwall, ACP Canopy",
                'image' => 'Kingsford Hotel.jpg',
                'status' => 'COMPLETED',
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2020-08-01',
                'end_date' => '2020-08-01'
            ],
            [
                'name' => "Axis Towers (1,2,3 & 4)",
                'project_category_id' => 5,
                'client' => "Filinvest Land Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Untitized Curtainwall, Storefront, Railing, Glass Canopy, and ACP Cladding",
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-08-01',
                'end_date' => '2019-08-01'
            ],
            [
                'name' => "Avida Asten Towers (1,2 & 3)",
                'project_category_id' => 2,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors and Windows",
                'image' => 'Avida Asten Towers (1,2 & 3).jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-12-01',
                'end_date' => '2019-12-01'
            ],
            [
                'name' => "Solstice Towers (1 & 2)",
                'project_category_id' => 2,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors and Windows, Storefronts and Curtainwalls",
                'image' => 'Solstice Towers (1 & 2).jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-10-01',
                'end_date' => '2019-10-01'
            ],
            [
                'name' => "Platinum Tower",
                'project_category_id' => 1,
                'client' => "Skyrise Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, ACP Cladding & Storefronts, Doors and Windows",
                'image' => 'Platinum Tower.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-09-01',
                'end_date' => '2019-09-01'
            ],
            [
                'name' => "Seda BGC",
                'project_category_id' => 3,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors and Windows, Storefronts and Canopies, ACP Cladding",
                'image' => 'Seda BGC.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-09-01',
                'end_date' => '2019-09-01'
            ],
            [
                'name' => "BGC Corporate Centere 2 (JABBA)",
                'project_category_id' => 5,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, ACP Wall Cladding",
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2020-10-01',
                'end_date' => '2020-10-01'
            ],
            [
                'name' => "Circuit Lane Enhancement Phase 1",
                'project_category_id' => 1,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Louvers & Glass Canopies",
                'image' => 'Circuit Lane Enhancement Phase 1.jpg',
                'status' => 'COMPLETED',
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2019-09-01',
                'end_date' => '2019-09-01'
            ],
            [
                'name' => "Udenna Tower",
                'project_category_id' => 1,
                'client' => "Udenna Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, Shopfronts, ACP & Cladding",
                'image' => 'Udenna Tower.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01'
            ],
            [
                'name' => "Avila Tower Circulo Verte",
                'project_category_id' => 2,
                'client' => "Ortigas & Company Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Windows, Storefronts & Louvers",
                'image' => 'Avila Tower Circulo Verte.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01'
            ],
            [
                'name' => "Skyrise 4B Annex",
                'project_category_id' => 1,
                'client' => "Skyrise Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Windows, Storefronts & Curtainwall",
                'image' => 'Skyrise 4B Annex.jpg',
                'status' => 'COMPLETED',
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01'
            ],
            [
                'name' => "Escala Salcedo Tower",
                'project_category_id' => 2,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "36 Storey Residential Bdlg. (Doors, Windows, Storefronts & Curtainwall)",
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-01-01',
                'end_date' => '2019-01-01'
            ],
            [
                'name' => "Beacon Tower 1",
                'project_category_id' => 2,
                'client' => "Geostate Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Doors and Windows",
                'image' => 'Beacon Tower 1.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-05-01',
                'end_date' => '2019-05-01'
            ],
            [
                'name' => "Kroma Tower",
                'project_category_id' => 2,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Window, Storefronts & Curtainwall",
                'image' => 'Kroma Tower.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01'
            ],
            [
                'name' => "100 West",
                'project_category_id' => 2,
                'client' => "Filinvest Land Inc.",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Curtainwalls & Windows",
                'image' => '100 West.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-12-01',
                'end_date' => '2018-12-01'
            ],
            [
                'name' => "Lerato Tower 3",
                'project_category_id' => 2,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Doors and Windows",
                'image' => 'Lerato Tower 3.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-10-01',
                'end_date' => '2018-10-01'
            ],
            [
                'name' => "Robinsons Cyberscapes Gamma",
                'project_category_id' => 1,
                'client' => "Robinsons Land Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "32 Storey Office Bldg. (Doors, Windows, Storefronts & Curtainwall)",
                'image' => 'Robinsons Cyberscapes Gamma.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-01-01',
                'end_date' => '2019-01-01'
            ],
            [
                'name' => "Skytech IT Park",
                'project_category_id' => 1,
                'client' => "Mabalacat Realty Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "6 Storey Office Bldg. (Shopfronts & Unitized Curtainwall)",
                'image' => 'Skytech IT Park.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-03-01',
                'end_date' => '2018-03-01'
            ],
            [
                'name' => "Sandstone Portico Tower 1",
                'project_category_id' => 2,
                'client' => "Makati Development Corporation",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Windows, Storefront & Curtainwall",
                'image' => 'Sandstone Portico Tower 1.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-04-01',
                'end_date' => '2018-04-01'
            ],
            [
                'name' => "B/E Aerospace",
                'project_category_id' => 4,
                'client' => "Kajima Philippines",
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Doors, Windows, Curtainwall & ACP Cladding",
                'image' => 'BE Aerospace.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-03-01',
                'end_date' => '2018-03-01'
            ],
            [
                'name' => '10 West Campus',
                'project_category_id' => 1,
                'client' => 'Megawide Construction Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Doors and Windows',
                'image' => '10 West Campus.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-03-01',
                'end_date' => '2018-03-01'
            ],
            [
                'name' => 'Circuit BPO 1',
                'project_category_id' => 1,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors and Windows',
                'image' => 'Circuit BPO 1.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-11-01',
                'end_date' => '2017-11-01'
            ],
            [
                'name' => 'Avida Verte Tower 1',
                'project_category_id' => 2,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, & Storefronts',
                'image' => 'Avida Verte Tower 1.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-11-01',
                'end_date' => '2017-11-01'
            ],
            [
                'name' => 'JTI Project Flex',
                'project_category_id' => 4,
                'client' => 'Sta. Clara Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Triple Glazed Thermal Breaked Unitized Windows',
                'image' => 'JTI Project Flex.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-10-01',
                'end_date' => '2017-10-01'
            ],
            [
                'name' => 'IBP Tower',
                'project_category_id' => 1,
                'client' => 'Ortigas & Company Inc.',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Windows, & Shopfronts',
                'image' => 'IBP Tower.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-01-01',
                'end_date' => '2017-01-01'
            ],
            [
                'name' => 'The Signature',
                'project_category_id' => 2,
                'client' => 'Filinvest Land Inc.',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Doors and Windows',
                'image' => 'The Signature.jpg',
                'status' => 'COMPLETED',
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2017-01-01',
                'end_date' => '2017-01-01'
            ],
            [
                'name' => 'Southpark Arvo Mall',
                'project_category_id' => 1,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Facial Mirrors',
                'image' => 'Southpark Arvo Mall.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2015-09-01',
                'end_date' => '2015-09-01'
            ],
            [
                'name' => 'Le Grand BPO Towers (A, B & C)',
                'project_category_id' => 1,
                'client' => 'Megaworld Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Curtainwall',
                'image' => 'Le Grand BPO Towers (A, B & C).jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-04-01',
                'end_date' => '2016-04-01'
            ],
            [
                'name' => 'Le Grand BPO Towers (D, E & F)',
                'project_category_id' => 1,
                'client' => 'Megaworld Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Curtainwall',
                'image' => 'Le Grand BPO Towers (D, E & F).jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-04-01',
                'end_date' => '2016-04-01'
            ],
            [
                'name' => 'Vinia Residences',
                'project_category_id' => 2,
                'client' => 'Filinvest Land Inc.',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Shopfronts, Doors, Windows & Curtainwall',
                'image' => 'Vinia Residences.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-04-01',
                'end_date' => '2016-04-01'
            ],
            [
                'name' => 'HQ-14 Gomez',
                'project_category_id' => 5,
                'client' => 'N/A',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'N/A',
                'image' => 'default.png',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2020-01-01',
                'end_date' => '2020-01-01'
            ],
            [
                'name' => 'Loreta Building 2',
                'project_category_id' => 1,
                'client' => 'Loreta Realty & Development',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, Shopfronts & Railings',
                'image' => 'Loreta Building 2.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2015-04-01',
                'end_date' => '2015-04-01'
            ],
            [
                'name' => 'INC Museum',
                'project_category_id' => 4,
                'client' => 'New Era University',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows & Stick Type Curtainwall',
                'image' => 'INC Museum.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2014-07-01',
                'end_date' => '2014-07-01'
            ],
            [
                'name' => 'The Medical City',
                'project_category_id' => 3,
                'client' => 'SC Megaworld',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, Windows, Canopy & Louvers',
                'image' => 'The Medical City.jpg',
                'status' => 'COMPLETED',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2014-06-01',
                'end_date' => '2014-06-01'
            ],
            [
                'name' => 'Entertainment City Link Bridge',
                'project_category_id' => 5,
                'client' => 'Megawide Construction',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Design and Build Aluminum and Glazing Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-02-01',
                'end_date' => '2024-02-01'
            ],
            [
                'name' => 'Astela Tower 1 and Podium',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Design and Build Aluminum and Glazing Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-01-01',
                'end_date' => '2024-01-01'
            ],
            [
                'name' => 'Cerca Nuveo Tower 1',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Design, Supply, and Installation of Glass Doors, Storefronts, and Glass Windows",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-01-01',
                'end_date' => '2024-01-01'
            ],
            [
                'name' => '80-Key 3 Star Boracay Hotel',
                'project_category_id' => 5,
                'client' => 'Mevbuilt',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Supply and Installation of Aluminum and Glazing Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-10-01',
                'end_date' => '2023-10-01'
            ],
            [
                'name' => 'Glorietta Reinvention',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Various Façade Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-09-01',
                'end_date' => '2023-09-01'
            ],
            [
                'name' => 'Alo Technohubs-Evo City BPO Towers',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Supply and Installation of Glass Doors and Windows",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-01',
                'end_date' => '2023-06-01'
            ],
            [
                'name' => 'Alo Technohubs-Nuvali Towers',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Complete Glass and Aluminum Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-01',
                'end_date' => '2023-06-01'
            ],
            [
                'name' => 'Alo Technohubs-Atria Towers',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Window, Storefronts, Slats",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-01',
                'end_date' => '2023-06-01'
            ],
            [
                'name' => 'Solinea Phase 3 Tower 5',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Supply and Installation of Aluminum and Glazing Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-08-01',
                'end_date' => '2023-08-01'
            ],
            [
                'name' => 'The Gentry',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Various Façade Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-11-01',
                'end_date' => '2023-11-01'
            ],
            [
                'name' => 'Arca South Pie BPO Towers',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Supply and Installation of Curtainwall and ACP Cladding",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-04-01',
                'end_date' => '2023-04-01'
            ],
            [
                'name' => 'Parklinks North Tower',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Design and Build of Glass and Aluminum Works",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-02-01',
                'end_date' => '2023-02-01'
            ],
            [
                'name' => 'Mergent Residences',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Supply and Installation of Unitized Windows, Storefronts and Slats",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-12-01',
                'end_date' => '2022-12-01'
            ],
            [
                'name' => 'Travertine Portico',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Windows, Door and Storefronts",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-12-01',
                'end_date' => '2022-12-01'
            ],
            [
                'name' => 'Parkford Suites Legaspi',
                'project_category_id' => 5,
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => "Unitized Curtainwall, ACP Cladding, Glass Railing, Storefront, Glass Canopy",
                'image' => 'default.png',
                'status' => 'ONGOING',
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-02-01',
                'end_date' => '2022-02-01'
            ],
        ];

        DB::table('projects')->insert($projectData);
        // ===== END PROJECT =====
        
        // ===== CERTIFICATIONS AND AWARDS =====
        $certificationData = [
            [
                'title' => "PHILIPPINE GREEN BUILDING COUNCIL MEMBER1",
                'description' => "The Philippine Green Building Council (PHILGBC) is a national non-stock, non-profit organization that promotes sharing of knowledge on green building best practices to the industry to ensure a sustainable environment.  PHILGBC represents more than 300 corporations and hundreds of individuals working together in the promotion of green buildings in the Philippines. The PHILGBC is an established member of the World Green Building Council (WorldGBC), and a member organization of the International Initiative for the Sustainable Built Environment (iiSBE).",
                'image' => '1.jpg',
                'status' => 1
            ],
            [
                'title' => "NFRC – ACE CERTIFIED",
                'description' => "Four employees of Dalkia Incorporated are NFRC – ACE Certified. It is an individual who has attended an Approved Calculation Entity Training Workshop, completed and passed all necessary examinations, and has obtained a Certificate of Approval which qualifies him or her to carry out performance calculations of fenestration products and issue label certificates using the Component Modeling Approach Software Tool (CMAST).",
                'image' => '2.jpg',
                'status' => 1
            ],
            [
                'title' => "DALKIA | USGBC CERTIFIED MEMBER",
                'description' => "Dalkia Incorporated is USGBC certified member since July 15, 2015 up to present.",
                'image' => '3.jpg',
                'status' => 1
            ],
            [
                'title' => "GOLDEN GLOBE AWARDS FOR BUSINESS EXCELLENCE 2017",
                'description' => "The Golden Globe Annual Awards for Business Excellence award-giving body is celebrating their “10th Year” Anniversary this 2017, and what better way to celebrate but to continue to recognize well deserving brands and personalities from different sectors of business including government service.",
                'image' => '4.jpg',
                'status' => 1
            ],
            [
                'title' => "QUALITY BOND | DOW CORNING MEMBER",
                'description' => "We have also been recently awarded as the 5th local contractor in the country to receive the quality bond membership from Dow Corning",
                'image' => '5.jpg',
                'status' => 1
            ],
            [
                'title' => "DALKIA INC IS NOW ISO CERTIFIED 9001 : 2015",
                'description' => "Dalkia Inc. has been certified to meet the requirements of ISO 9001:2015 last November 2016. Audited and certified by Jones Unson Solutions, Dalkia Inc is now accredited with Certificate Registration No. 44 100 17 93 0008 under the scope “Design and Build of Curtain Walls, Windows & Metal Cladding”",
                'image' => '6.jpg',
                'status' => 1
            ]
        ];
        DB::table('certification_awards')->insert($certificationData);
        // ===== END CERTIFICATIONS AND AWARDS =====

        // ===== CAREERS =====
        $careersData = [
            [
                'job_title' => "PRODUCTION SECTION SUPERVISOR",
                'job_description' => "As a Production Section Supervisor, you will oversee and coordinate the activities of production workers to ensure efficient production output. Your responsibilities will include scheduling shifts, monitoring production processes, ensuring adherence to quality standards, and implementing measures to improve productivity and safety. You will also be responsible for training and evaluating production team members to optimize their performance.",
                'status' => 1
            ],
            [
                'job_title' => "HUMAN RESOURCES OFFICER",
                'job_description' => "The Human Resources Officer plays a key role in managing various HR functions within the organization. Responsibilities include recruitment and selection, employee relations, performance management, training and development, compensation and benefits administration, and HR policy implementation. You will be tasked with fostering a positive work environment and ensuring compliance with labor laws and company policies.",
                'status' => 1
            ],
            [
                'job_title' => "PROJECT MANAGER",
                'job_description' => "As a Project Manager, you will be responsible for planning, organizing, and managing the execution of construction projects from start to finish. This includes coordinating resources, monitoring progress, managing budgets and timelines, and ensuring quality deliverables. You will serve as the primary point of contact for clients and stakeholders, ensuring effective communication and stakeholder management throughout the project lifecycle.",
                'status' => 1
            ],
            [
                'job_title' => "PROJECT IN CHARGE / PROJECT ENGINEER",
                'job_description' => "The Project In Charge (or Project Engineer) oversees technical aspects of construction projects. Responsibilities include interpreting project drawings and specifications, coordinating with subcontractors and suppliers, managing project schedules and budgets, ensuring compliance with building codes and regulations, and resolving technical issues that arise during construction. You will work closely with the Project Manager to ensure project goals are achieved efficiently.",
                'status' => 1
            ],
            [
                'job_title' => "FACADE DESIGNER",
                'job_description' => "As a Facade Designer, you will be responsible for designing the exterior building envelope (facade) of construction projects. This includes creating detailed facade drawings, selecting materials, evaluating structural requirements, and ensuring designs meet aesthetic and functional requirements. Collaboration with architects, engineers, and clients is crucial to develop innovative and sustainable facade solutions.",
                'status' => 1
            ],
            [
                'job_title' => "SAFETY OFFICER",
                'job_description' => "The Safety Officer is responsible for promoting and maintaining a safe working environment on construction sites. This involves implementing safety programs, conducting regular inspections and audits, identifying potential hazards, ensuring compliance with safety regulations, and providing safety training to workers. You will play a critical role in preventing accidents and promoting a culture of safety among all project stakeholders.",
                'status' => 1
            ],
            [
                'job_title' => "STRUCTURAL FACADE ENGINEER",
                'job_description' => "As a Structural Facade Engineer, your role focuses on the structural integrity and performance of building facades. You will design and analyze facade systems to ensure they meet structural requirements, wind loads, and other environmental factors. Responsibilities include coordinating with architects and engineers, conducting structural calculations, reviewing design drawings, and overseeing facade construction to ensure quality and safety standards are upheld.",
                'status' => 1
            ]
        ];
        DB::table('careers')->insert($careersData);
        // ===== END CAREERS =====
        
        // ===== SYSTEM SETTINGS =====
        $settingsData = [
            [
                'key' => 'WEBSITE_MAINTENANCE',
                'value' => 0,
                'description' => "0 - No, 1 - Yes",
                'status' => 1
            ],
        ];
        DB::table('system_settings')->insert($settingsData);
        // ===== END SYSTEM SETTINGS =====
    }
}
