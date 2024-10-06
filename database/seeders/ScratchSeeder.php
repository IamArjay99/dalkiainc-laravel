<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ScratchSeeder extends Seeder
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
                'address' => "Warehouse 4 RDC Business Complex, Mercedes Avenue, Brgy. San Andres, Cainta, Rizal 1900 Philippines",
                'contact_number' => "(632) 655-0030/477-1585",
                'email_address' => "info@dalkiainc.com",
                'business_hours' => "8:00 AM - 5:30 PM",
                'facebook_link' => 'https://www.facebook.com/dalkiainc/',
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
                'description' => "<ul><li>Certified National Fenestration Rating Council-Approved Calculation Entity</li><li>Acquired ISO 9001:2015 certification</li><li>Became a member of US Green Building</li><li>Acquisition of 1 unit of a 3-axis CNC Machining Center&nbsp;</li><li>Acquisition of 1 unit of 50-meter Curtainwall Glazing Conveyor</li></ul>"
            ],
            [
                'id' => 3,
                'year' => 2016,
                'description' => "<ul><li>Expand Production and Warehouse area from 4,100 sq.m to 25,600 sq.m</li><li>Acquisition of an additional 2 units of a 4-axis CNC Machining Center&nbsp;</li><li>Acquisition of an additional 2 units of Double Head Aluminum of Cutting Machine.&nbsp;</li><li>Composite Panel Processing Center&nbsp;</li></ul>"
            ],
            [
                'id' => 4,
                'year' => 2017,
                'description' => "<ul><li>Became a member of the Philippine Green Building Council</li></ul>"
            ],
            [
                'id' => 5,
                'year' => 2020,
                'description' => "<ul><li>Establishment of 15,000 sq.m production and warehouse facilities in Cebu.</li></ul>"
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
                'id' => 9,
                'year' => 2024,
                'description' => "<ul><li>15 newly awarded projects as of January-June.</li></ul>"
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
                'id' => 1, 
                'project_category_id' => 2,
                'name' => 'Alveo Veranda',
                'client' => 'Makati Development Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Punch Windows, Skylight, Canopy, Glass Railings, Storefronts, Trellis, Frameless Glass Door and Framed Glass Walls',
                'image' => 'Alveo Veranda1720428052.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-11-06',
                'end_date' => '2024-04-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:28:43'
            ],
            [
                'id' => 2, 
                'project_category_id' => 5,
                'name' => 'West Aeropark Quad 1 Phase 1',
                'client' => 'Global Gateway Development Corporation', 
                'description' => NULL,
                'floor' => '18',
                'scope_of_work' => 'Unitized Curtainwall, ACP Cladding, Glass Railing, Storefront, Glass Canopy, and Structural Steel Works',
                'image' => 'West Aeropark Quad 1 Phase 11718259726.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2018-07-18',
                'end_date' => '2023-03-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:27:58'
            ],
            [
                'id' => 3, 
                'project_category_id' => 5,
                'name' => 'Marian Chapel',
                'client' => 'Filinvest Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Roofing System & Skylights',
                'image' => 'Marian Chapel1720428078.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-05-06',
                'end_date' => '2021-04-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:24:33'
            ],
            [
                'id' => 4, 
                'project_category_id' => 1,
                'name' => 'Parkway Corporate Center',
                'client' => 'Filinvest Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows & Unitized Curtainwall',
                'image' => 'Parkway Corporate Center1720599348.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2017-02-02',
                'end_date' => '2018-03-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 16:15:48'
            ],
            [
                'id' => 5, 
                'project_category_id' => 1,
                'name' => 'Estancia Mall Expansion',
                'client' => 'Ortigas & Company Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Curtainwall and ACP Cladding',
                'image' => 'Estancia Mall Expansion.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-05-06',
                'end_date' => '2020-02-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-11 09:00:37'
            ],
            [
                'id' => 6, 
                'project_category_id' => 1,
                'name' => 'Alhi Corporate Office',
                'client' => 'Posh Properties Development Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, ACP Cladding, Storefront, Louvers',
                'image' => 'Alhi Corporate Office.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-01-21',
                'end_date' => '2020-07-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 15:58:31'
            ],
            [
                'id' => 7, 
                'project_category_id' => 1,
                'name' => 'One Le Grand Tower',
                'client' => 'Megaworld Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, Ribbon, Windows, Storefront, Louvers',
                'image' => 'One Le Grand Tower1720598793.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2019-01-15',
                'end_date' => '2020-04-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 16:06:33'
            ],
            [
                'id' => 8, 
                'project_category_id' => 3,
                'name' => 'Kingsford Hotel',
                'client' => 'Megaworld Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors and Windows, Storefronts and Curtainwall, ACP Canopy',
                'image' => 'Kingsford Hotel.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2020-01-29',
                'end_date' => '2020-03-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 16:11:50'
            ],
            [
                'id' => 9, 
                'project_category_id' => 5,
                'name' => 'Axis Towers (1,2,3 & 4)',
                'client' => 'Filinvest Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Untitized Curtainwall, Storefront, Railing, Glass Canopy, and ACP Cladding',
                'image' => 'Axis Towers (1,2,3 & 4)1718259793.png',
                'status' => 'COMPLETED', 
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2019-08-01',
                'end_date' => '2019-08-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-13 14:23:13'
            ],
            [
                'id' => 10, 
                'project_category_id' => 2,
                'name' => 'Avida Asten Towers (1,2 & 3)',
                'client' => 'Avida Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors and Windows',
                'image' => 'Avida Asten Towers (1,2 & 3).jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2015-12-03',
                'end_date' => '2019-12-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:31:08'
            ],
            [
                'id' => 11, 
                'project_category_id' => 2,
                'name' => 'Solstice Towers (1 & 2)',
                'client' => 'Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors and Windows, Storefronts and Curtainwalls',
                'image' => 'Solstice Towers (1 & 2).jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-09-07',
                'end_date' => '2019-07-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:30:16'
            ],
            [
                'id' => 12, 
                'project_category_id' => 1,
                'name' => 'Platinum Tower',
                'client' => 'Skyrise Development Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, ACP Cladding & Storefronts, Doors and Windows',
                'image' => 'Platinum Tower.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-10-07',
                'end_date' => '2019-10-07',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-11 09:42:12'
            ],
            [
                'id' => 13, 
                'project_category_id' => 3,
                'name' => 'Seda BGC',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors and Windows, Storefronts and Canopies, ACP Cladding',
                'image' => 'Seda BGC.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-09-01',
                'end_date' => '2019-09-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 14, 
                'project_category_id' => 1,
                'name' => 'BGC Corporate Centere 2 (JABBA)',
                'client' => 'Ayala Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall and ACP Wall Cladding',
                'image' => 'BGC Corporate Centere 2 (JABBA)1718259840.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2019-07-05',
                'end_date' => '2020-05-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:25:55'
            ],
            [
                'id' => 15, 
                'project_category_id' => 1,
                'name' => 'Circuit Lane Enhancement Phase 1',
                'client' => 'Makati Development Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Louvers & Glass Canopies',
                'image' => 'Circuit Lane Enhancement Phase 1.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-09-01',
                'end_date' => '2019-09-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-13 14:27:26'
            ],
            [
                'id' =>16, 
                'project_category_id' =>1,
                'name' =>'Udenna Tower',
                'client' =>'Udenna Corporation',
                'description' =>'N/A',
                'floor' =>'N/A',
                'scope_of_work' =>'Unitized Curtainwall, Shopfronts, ACP & Cladding',
                'image' =>'Udenna Tower.jpg',
                'status' =>'COMPLETED', 
                'showcase' =>0,
                'project_type' =>'Major',
                'start_date' =>'2019-06-01',
                'end_date' =>'2019-06-01',
                'created_at' =>'2024-06-12 09:58:33',
                'updated_at' =>'2024-06-12 09:58:33'
            ],
            [
                'id' => 17, 
                'project_category_id' => 2,
                'name' => 'Avila Tower Circulo Verte',
                'client' => 'Ortigas & Company Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Louvers',
                'image' => 'Avila Tower Circulo Verte.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-13 14:27:47'
            ],
            [
                'id' => 18, 
                'project_category_id' => 1,
                'name' => 'Skyrise 4B Annex',
                'client' => 'Skyrise Development Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Curtainwall',
                'image' => 'Skyrise 4B Annex.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 18:41:41'
            ],
            [
                'id' => 19, 
                'project_category_id' => 2,
                'name' => 'Escala Salcedo Tower',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => '36 Storey Residential Bdlg. (Doors, Windows, Storefronts & Curtainwall)',
                'image' => 'default.png',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-01-01',
                'end_date' => '2019-01-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 20, 
                'project_category_id' => 2,
                'name' => 'Beacon Tower 1',
                'client' => 'Geostate Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Doors and Windows',
                'image' => 'Beacon Tower 1.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-05-01',
                'end_date' => '2019-05-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 21, 
                'project_category_id' => 2,
                'name' => 'Kroma Tower',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Window, Storefronts & Curtainwall',
                'image' => 'Kroma Tower.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-06-01',
                'end_date' => '2019-06-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 22, 
                'project_category_id' => 2,
                'name' => '100 West',
                'client' => 'Filinvest Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Curtainwalls & Windows',
                'image' => '100 West.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-12-01',
                'end_date' => '2018-12-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-13 10:48:10'
            ],
            [
                'id' => 23, 
                'project_category_id' => 2,
                'name' => 'Lerato Tower 3',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Doors and Windows',
                'image' => 'Lerato Tower 3.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-10-01',
                'end_date' => '2018-10-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 24, 
                'project_category_id' => 1,
                'name' => 'Robinsons Cyberscapes Gamma',
                'client' => 'Robinsons Land Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => '32 Storey Office Bldg. (Doors, Windows, Storefronts & Curtainwall)',
                'image' => 'Robinsons Cyberscapes Gamma.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-01-01',
                'end_date' => '2019-01-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 25, 
                'project_category_id' => 1,
                'name' => 'Skytech IT Park',
                'client' => 'Mabalacat Realty Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => '6 Storey Office Bldg. (Shopfronts & Unitized Curtainwall)',
                'image' => 'Skytech IT Park.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-03-01',
                'end_date' => '2018-03-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 26, 
                'project_category_id' => 2,
                'name' => 'Sandstone Portico Tower 1',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefront & Curtainwall',
                'image' => 'Sandstone Portico Tower 1.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-04-01',
                'end_date' => '2018-04-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 27, 
                'project_category_id' => 4,
                'name' => 'B/E Aerospace',
                'client' => 'Kajima Philippines',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Curtainwall & ACP Cladding',
                'image' => 'BE Aerospace.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2018-03-01',
                'end_date' => '2018-03-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 28, 
                'project_category_id' => 1,
                'name' => '10 West Campus',
                'client' => 'Megawide Construction Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Doors and Windows',
                'image' => '10 West Campus1718259900.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 1,
                'project_type' => 'Major',
                'start_date' => '2018-03-01',
                'end_date' => '2018-03-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-13 14:25:00'
            ],
            [
                'id' => 29, 
                'project_category_id' => 1,
                'name' => 'Circuit BPO 1',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors and Windows',
                'image' => 'Circuit BPO 1.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-11-01',
                'end_date' => '2017-11-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 30, 
                'project_category_id' => 2,
                'name' => 'Avida Verte Tower 1',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, & Storefronts',
                'image' => 'Avida Verte Tower 1.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-11-01',
                'end_date' => '2017-11-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 31, 
                'project_category_id' => 4,
                'name' => 'JTI Project Flex',
                'client' => 'Sta. Clara Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Triple Glazed Thermal Breaked Unitized Windows',
                'image' => 'JTI Project Flex.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-10-01',
                'end_date' => '2017-10-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 32, 
                'project_category_id' => 1,
                'name' => 'IBP Tower',
                'client' => 'Ortigas & Company Inc.',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Windows, & Shopfronts',
                'image' => 'IBP Tower.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-01-01',
                'end_date' => '2017-01-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 33, 
                'project_category_id' => 2,
                'name' => 'The Signature',
                'client' => 'Filinvest Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Doors and Windows',
                'image' => 'The Signature.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2017-01-01',
                'end_date' => '2017-01-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-13 14:28:21'
            ],
            [
                'id' => 34, 
                'project_category_id' => 1,
                'name' => 'Southpark Arvo Mall',
                'client' => 'Makati Development Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Facial Mirrors',
                'image' => 'Southpark Arvo Mall.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2015-09-01',
                'end_date' => '2015-09-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 35, 
                'project_category_id' => 1,
                'name' => 'Le Grand BPO Towers (A, B & C)',
                'client' => 'Megaworld Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Curtainwall',
                'image' => 'Le Grand BPO Towers (A, B & C).jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-04-01',
                'end_date' => '2016-04-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 36, 
                'project_category_id' => 1,
                'name' => 'Le Grand BPO Towers (D, E & F)',
                'client' => 'Megaworld Corporation',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows, Storefronts & Curtainwall',
                'image' => 'Le Grand BPO Towers (D, E & F).jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-04-01',
                'end_date' => '2016-04-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 37, 
                'project_category_id' => 2,
                'name' => 'Vinia Residences',
                'client' => 'Filinvest Land Inc.',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Shopfronts, Doors, Windows & Curtainwall',
                'image' => 'Vinia Residences.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2016-04-01',
                'end_date' => '2016-04-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 38, 
                'project_category_id' => 5,
                'name' => 'HQ-14 Gomez',
                'client' => 'N/A',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'N/A',
                'image' => 'default.png',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2020-01-01',
                'end_date' => '2020-01-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 39, 
                'project_category_id' => 1,
                'name' => 'Loreta Building 2',
                'client' => 'Loreta Realty & Development',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, Shopfronts & Railings',
                'image' => 'Loreta Building 2.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2015-04-01',
                'end_date' => '2015-04-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 40, 
                'project_category_id' => 4,
                'name' => 'INC Museum',
                'client' => 'New Era University',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Doors, Windows & Stick Type Curtainwall',
                'image' => 'INC Museum.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2014-07-01',
                'end_date' => '2014-07-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 41, 
                'project_category_id' => 3,
                'name' => 'The Medical City',
                'client' => 'SC Megaworld',
                'description' => 'N/A',
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, Windows, Canopy & Louvers',
                'image' => 'The Medical City.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2014-06-01',
                'end_date' => '2014-06-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-06-12 09:58:33'
            ],
            [
                'id' => 42, 
                'project_category_id' => 5,
                'name' => 'Entertainment City Link Bridge',
                'client' => 'Travellers International Hotel Group, Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Aluminum and Glazing Works',
                'image' => 'Entertainment City Link Bridge1720421388.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-08-10',
                'end_date' => '2024-10-23',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 14:11:47'
            ],
            [
                'id' => 43, 
                'project_category_id' => 2,
                'name' => 'Astela Tower 1 and Podium',
                'client' => 'Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Aluminum and Glazing Works',
                'image' => 'Astela Tower 1 and Podium1720421720.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-10-26',
                'end_date' => '2027-03-13',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 11:35:10'
            ],
            [
                'id' => 44, 
                'project_category_id' => 2,
                'name' => 'Cerca Nuveo Tower 1',
                'client' => 'Alveo Land Corp', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Glass Doors, Storefronts, and Glass Windows',
                'image' => 'Cerca Nuveo Tower 11720426699.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-02-14',
                'end_date' => '2025-03-31',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 14:13:02'
            ],
            [
                'id' => 45, 
                'project_category_id' => 3,
                'name' => '80-Key 3 Star Boracay Hotel',
                'client' => 'Golden TW Realty and Development Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Aluminum and Glazing Works',
                'image' => '80-Key 3 Star Boracay Hotel1720426757.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-10-03',
                'end_date' => '2026-10-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:19:54'
            ],
            [
                'id' => 46, 
                'project_category_id' => 1,
                'name' => 'Glorietta Reinvention',
                'client' => 'Ayala Land Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Various Façade Works',
                'image' => 'Glorietta Reinvention1720426815.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-09-18',
                'end_date' => '2025-01-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 14:51:20'
            ],
            [
                'id' => 47, 
                'project_category_id' => 1,
                'name' => 'Alo Technohubs-Evo City BPO Towers',
                'client' => 'Ayala Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Glass Doors and Windows',
                'image' => 'Alo Technohubs-Evo City BPO Towers1720427159.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-01',
                'end_date' => '2025-03-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:20:55'
            ],
            [
                'id' => 48, 
                'project_category_id' => 1,
                'name' => 'Alo Technohubs-Nuvali Towers',
                'client' => 'Ayala Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Complete Glass and Aluminum Works',
                'image' => 'Alo Technohubs-Nuvali Towers1720427176.png',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-09',
                'end_date' => '2024-07-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-09-11 09:36:38'
            ],
            [
                'id' => 49, 
                'project_category_id' => 1,
                'name' => 'Alo Technohubs-Atria Towers',
                'client' => 'Ayala Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Window, Storefronts, Slats',
                'image' => 'Alo Technohubs-Atria Towers1720427206.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-06-01',
                'end_date' => '2024-11-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 14:56:36'
            ],
            [
                'id' => 50, 
                'project_category_id' => 2,
                'name' => 'Solinea Tower 5',
                'client' => 'Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Aluminum and Glazing Works',
                'image' => 'Solinea Phase 3 Tower 51720427100.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-08-05',
                'end_date' => '2025-05-03',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:19:24'
            ],
            [
                'id' => 51, 
                'project_category_id' => 2,
                'name' => 'The Gentry',
                'client' => 'Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Various Façade Works',
                'image' => 'The Gentry1720427272.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2023-11-01',
                'end_date' => '2024-08-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-07-10 14:44:39'
            ],
            [
                'id' => 52, 
                'project_category_id' => 1,
                'name' => 'Arca South Pie BPO Towers',
                'client' => 'Ayala Land Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Curtainwall and ACP Cladding',
                'image' => 'Arca South Pie BPO Towers1720427251.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-03-20',
                'end_date' => '2025-03-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 14:12:34'
            ],
            [
                'id' => 53, 
                'project_category_id' => 5,
                'name' => 'Parklinks North Tower',
                'client' => 'Ayala Land Inc. & Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Glass and Aluminum Works',
                'image' => 'Parklinks North Tower1720427294.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-12-14',
                'end_date' => '2024-11-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:20:18'
            ],
            [
                'id' => 54, 
                'project_category_id' => 2,
                'name' => 'Mergent Residences',
                'client' => 'Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Windows, Storefronts and Slats',
                'image' => 'Mergent Residences1720427316.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-12-27',
                'end_date' => '2025-01-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:21:19'
            ],
            [
                'id' => 55, 
                'project_category_id' => 2,
                'name' => 'Travertine Portico',
                'client' => 'Ayala Land Inc.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Windows, Door and Storefronts',
                'image' => 'Travertine Portico1720427370.png',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-12-01',
                'end_date' => '2022-12-01',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-09-11 09:52:27'
            ],
            [
                'id' => 56, 
                'project_category_id' => 2,
                'name' => 'Parkford Suites Legaspi',
                'client' => 'Alveo Land Corp.', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Unitized Curtainwall, ACP Cladding, Glass Railing, Storefront, Glass Canopy',
                'image' => 'Parkford Suites Legaspi1720427945.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-02-22',
                'end_date' => '2024-09-20',
                'created_at' => '2024-06-12 09:58:33',
                'updated_at' => '2024-08-15 16:22:01'
            ],
            [
                'id' => 57, 
                'project_category_id' => 5,
                'name' => 'Project Luna Data Centre',
                'client' => 'A Flow Data Centres by Ayala Land Logistics Holdings', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Facade Work Package',
                'image' => 'Project Luna Data Centre1720488986.png',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-01-25',
                'end_date' => '2024-12-31',
                'created_at' => '2024-07-09 09:36:26',
                'updated_at' => '2024-08-15 14:13:16'
            ],
            [
                'id' => 58, 
                'project_category_id' => 1,
                'name' => 'Greenbelt Reinvention',
                'client' => 'Ayala Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Aluminum and Glazing Works',
                'image' => 'Greenbelt Reinvention1720515728.jpg',
                'status' => 'ONGOING', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2024-08-29',
                'end_date' => '2024-12-17',
                'created_at' => '2024-07-09 10:45:57',
                'updated_at' => '2024-08-15 11:53:55'
            ],
            [
                'id' => 59, 
                'project_category_id' => 2,
                'name' => 'Callisto Tower 1 and 2',
                'client' => 'Makati Development Corporation', 
                'description' => NULL,
                'floor' => '38',
                'scope_of_work' => 'Glass Windows',
                'image' => 'Callisto Tower 1 and 21720518345.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-09-23',
                'end_date' => '2024-06-28',
                'created_at' => '2024-07-09 17:45:45',
                'updated_at' => '2024-08-15 16:25:15'
            ],
            [
                'id' => 60, 
                'project_category_id' => 1,
                'name' => 'One Filinvest',
                'client' => 'Filinvest Development Corporation', 
                'description' => NULL,
                'floor' => 'N/A',
                'scope_of_work' => 'Supply, Installation and Delivery of Simulated Stone and Metallic Finish ACP',
                'image' => 'One Filinvest1720573334.png',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2019-09-06',
                'end_date' => '2024-06-10',
                'created_at' => '2024-07-10 09:02:14',
                'updated_at' => '2024-07-10 09:02:14'
            ],
            [
                'id' => 61, 
                'project_category_id' => 1,
                'name' => '387 Gil Puyat',
                'client' => 'Filinvest Development Corporation', 
                'description' => NULL,
                'floor' => '18',
                'scope_of_work' => 'Glass and Aluminum Facade',
                'image' => 'default.png',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2021-11-22',
                'end_date' => '2022-03-07',
                'created_at' => '2024-07-10 10:32:56',
                'updated_at' => '2024-09-11 17:28:49'
            ],
            [
                'id' => 62, 
                'project_category_id' => 1,
                'name' => 'Southern Star Watch Tower',
                'client' => 'Ecozone Properties Inc.', 
                'description' => NULL,
                'floor' => '6',
                'scope_of_work' => 'Unitized Curtainwall, Glass Canopy and Framings, Glass Doors/Windows and Aluminum (LEED Certified Project)',
                'image' => 'Southern Star Watch Tower1726046964.jpg',
                'status' => 'COMPLETED', 
                'showcase' => 0,
                'project_type' => 'Major',
                'start_date' => '2022-04-24',
                'end_date' => '2024-06-10',
                'created_at' => '2024-07-10 11:02:45',
                'updated_at' => '2024-09-11 17:29:24'
            ]
        ];

        DB::table('projects')->insert($projectData);
        // ===== END PROJECT =====
        
        // ===== CERTIFICATIONS AND AWARDS =====
        $certificationData = [
            [
                'title' => "PHILIPPINE GREEN BUILDING COUNCIL MEMBER1",
                'description' => "The Philippine Green Building Council (PHILGBC) is a national non-stock, non-profit organization that promotes the sharing of knowledge on green building best practices with the industry to ensure a sustainable environment. PHILGBC represents more than 300 corporations and hundreds of individuals working together in the promotion of green buildings in the Philippines. The PHILGBC is an established member of the World Green Building Council (WorldGBC) and a member organization of the International Initiative for the Sustainable Built Environment (iiSBE).",
                'image' => '1.jpg',
                'status' => 1
            ],
            [
                'title' => "NFRC – ACE CERTIFIED",
                'description' => "Four employees of Dalkia Incorporated are NFRC-ACE certified. It is an individual who has attended an approved calculation entity training workshop, completed and passed all necessary examinations, and obtained a Certificate of Approval, which qualifies him or her to carry out performance calculations of fenestration products and issue label certificates using the Component Modeling Approach Software Tool (CMAST).",
                'image' => '2.jpg',
                'status' => 1
            ],
            [
                'title' => "DALKIA | USGBC CERTIFIED MEMBER",
                'description' => "Dalkia Incorporated has been a USGBC-certified member since July 15, 2015, up to the present.",
                'image' => '3.jpg',
                'status' => 1
            ],
            [
                'title' => "GOLDEN GLOBE AWARDS FOR BUSINESS EXCELLENCE 2017",
                'description' => "The Golden Globe Annual Awards for Business Excellence award-giving body is celebrating their “10th Year” anniversary this year, and what better way to celebrate than to continue to recognize well-deserving brands and personalities from different sectors of business, including government service.",
                'image' => '4.jpg',
                'status' => 1
            ],
            [
                'title' => "DALKIA INC IS NOW ISO CERTIFIED 9001 : 2015",
                'description' => "Dalkia Inc. is certified to meet the requirements of ISO 9001:2015 in November 2016. Audited and certified by Jones Unson Solutions, Dalkia Inc. is now accredited with Certificate Registration No. 44 100 17 93 0008 under the scope “Design and Build of Curtain Walls, Windows, and Metal Cladding.”",
                'image' => 'DALKIA INC IS NOW ISO CERTIFIED 9001.png',
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
