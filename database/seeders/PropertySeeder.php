<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            // New Cairo Properties
            [
                'title' => 'Luxury Apartment in Fifth Settlement',
                'description' => 'Spacious 3-bedroom apartment with modern amenities and stunning views.',
                'price' => 2500000,
                'location' => 'Fifth Settlement',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 180,
                'type' => 'apartment',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['swimming_pool', 'gym', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Ahmed Hassan',
                'broker_phone' => '+201234567890',
                'broker_email' => 'ahmed@example.com'
            ],
            [
                'title' => 'Villa in Rehab City',
                'description' => 'Beautiful 4-bedroom villa with private garden and pool.',
                'price' => 5000000,
                'location' => 'Rehab City',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 300,
                'type' => 'villa',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2019,
                'amenities' => json_encode(['garden', 'swimming_pool', 'security', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Mohamed Ali',
                'broker_phone' => '+201234567891',
                'broker_email' => 'mohamed@example.com'
            ],

            // Sheikh Zayed Properties
            [
                'title' => 'Twinhouse in Beverly Hills',
                'description' => 'Modern twinhouse with 3 bedrooms and rooftop terrace.',
                'price' => 3500000,
                'location' => 'Beverly Hills',
                'city' => 'Cairo',
                'neighborhood' => 'Sheikh Zayed',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 220,
                'type' => 'twinhouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['garden', 'security', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Sarah Mohamed',
                'broker_phone' => '+201234567892',
                'broker_email' => 'sarah@example.com'
            ],

            // North Coast Properties
            [
                'title' => 'Villa in Marassi',
                'description' => 'Luxury 5-bedroom villa with private beach access.',
                'price' => 12000000,
                'location' => 'Marassi',
                'city' => 'North Coast',
                'neighborhood' => 'Sidi Abdel Rahman',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 400,
                'type' => 'villa',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2022,
                'amenities' => json_encode(['sea_view', 'swimming_pool', 'garden', 'security', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1600607687644-c7171b42498b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Omar Hassan',
                'broker_phone' => '+201234567893',
                'broker_email' => 'omar@example.com'
            ],

            // Alexandria Properties
            [
                'title' => 'Apartment in San Stefano',
                'description' => 'Luxury 2-bedroom apartment with sea view.',
                'price' => 3000000,
                'location' => 'San Stefano',
                'city' => 'Alexandria',
                'neighborhood' => 'San Stefano',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 150,
                'type' => 'apartment',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['sea_view', 'swimming_pool', 'gym', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Layla Ahmed',
                'broker_phone' => '+201234567894',
                'broker_email' => 'layla@example.com'
            ],

            // Additional properties with varying details
            [
                'title' => 'Studio in Downtown',
                'description' => 'Modern studio apartment in the heart of downtown.',
                'price' => 1200000,
                'location' => 'Downtown',
                'city' => 'Cairo',
                'neighborhood' => 'Downtown',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 60,
                'type' => 'studio',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Youssef Mohamed',
                'broker_phone' => '+201234567895',
                'broker_email' => 'youssef@example.com'
            ],
            [
                'title' => 'Duplex in Maadi',
                'description' => 'Spacious duplex with garden and private entrance.',
                'price' => 4000000,
                'location' => 'Maadi',
                'city' => 'Cairo',
                'neighborhood' => 'Maadi',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 250,
                'type' => 'duplex',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2019,
                'amenities' => json_encode(['garden', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nadia Hassan',
                'broker_phone' => '+201234567896',
                'broker_email' => 'nadia@example.com'
            ],
            [
                'title' => 'Penthouse in Zamalek',
                'description' => 'Luxury penthouse with panoramic views of the Nile.',
                'price' => 8000000,
                'location' => 'Zamalek',
                'city' => 'Cairo',
                'neighborhood' => 'Zamalek',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 280,
                'type' => 'penthouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2022,
                'amenities' => json_encode(['nile_view', 'swimming_pool', 'gym', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Karim Ali',
                'broker_phone' => '+201234567897',
                'broker_email' => 'karim@example.com'
            ],
            [
                'title' => 'Townhouse in New Cairo',
                'description' => 'Modern townhouse with private garden and garage.',
                'price' => 3500000,
                'location' => 'New Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 200,
                'type' => 'townhouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['garden', 'security', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Hassan Mohamed',
                'broker_phone' => '+201234567898',
                'broker_email' => 'hassan@example.com'
            ],
            [
                'title' => 'Apartment in Heliopolis',
                'description' => 'Classic 2-bedroom apartment in a historic building.',
                'price' => 2000000,
                'location' => 'Heliopolis',
                'city' => 'Cairo',
                'neighborhood' => 'Heliopolis',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 120,
                'type' => 'apartment',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Fatma Ali',
                'broker_phone' => '+201234567899',
                'broker_email' => 'fatma@example.com'
            ],
            // New properties for rent
            [
                'title' => 'Apartment in Downtown',
                'description' => 'Modern studio apartment in Downtown Cairo, perfect for young professionals.',
                'price' => 5000,
                'location' => 'Downtown, Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'Downtown',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 60,
                'type' => 'Apartment',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2015,
                'amenities' => json_encode(['Security', 'Parking', 'Elevator', '24/7 Security']),
                'image' => 'https://images.unsplash.com/photo-1522708323590-d24d6876d7c1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Mona Adel',
                'broker_phone' => '+20 109 012 3456',
                'broker_email' => 'mona.adel@realestate.com'
            ],
            [
                'title' => 'Office Space in Smart Village',
                'description' => 'Modern office space in Smart Village, ideal for tech companies and startups.',
                'price' => 15000,
                'location' => 'Smart Village, Giza',
                'city' => 'Giza',
                'neighborhood' => 'Smart Village',
                'bedrooms' => 0,
                'bathrooms' => 2,
                'area' => 120,
                'type' => 'Office',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['High-Speed Internet', 'Security', 'Parking', 'Meeting Rooms']),
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Tarek Mohamed',
                'broker_phone' => '+20 110 123 4567',
                'broker_email' => 'tarek.mohamed@realestate.com'
            ],
            [
                'title' => 'Commercial Space in City Stars',
                'description' => 'Prime retail space in City Stars mall, high foot traffic area.',
                'price' => 25000,
                'location' => 'City Stars, Nasr City',
                'city' => 'Cairo',
                'neighborhood' => 'Nasr City',
                'bedrooms' => 0,
                'bathrooms' => 1,
                'area' => 80,
                'type' => 'Commercial',
                'status' => 'For Rent',
                'furnished' => false,
                'year_built' => 2018,
                'amenities' => json_encode(['Mall Location', 'Security', 'Parking', 'High Foot Traffic']),
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nadia Samir',
                'broker_phone' => '+20 111 234 5678',
                'broker_email' => 'nadia.samir@realestate.com'
            ],
            [
                'title' => 'Apartment in Porto Marina',
                'description' => 'Stunning 2-bedroom apartment in Porto Marina with sea view and premium amenities.',
                'price' => 8000,
                'location' => 'Porto Marina, North Coast',
                'city' => 'North Coast',
                'neighborhood' => 'Porto Marina',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 100,
                'type' => 'Apartment',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['Sea View', 'Swimming Pool', 'Security', 'Parking']),
                'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Karim Hassan',
                'broker_phone' => '+20 113 456 7890',
                'broker_email' => 'karim.hassan@realestate.com'
            ],
            [
                'title' => 'Villa in Alamein',
                'description' => 'Beautiful 4-bedroom villa in Alamein with private pool and garden.',
                'price' => 12000,
                'location' => 'Alamein, North Coast',
                'city' => 'North Coast',
                'neighborhood' => 'Alamein',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 300,
                'type' => 'Villa',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['Private Pool', 'Garden', 'Security', 'Parking']),
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Samir Adel',
                'broker_phone' => '+20 112 345 6789',
                'broker_email' => 'samir.adel@realestate.com'
            ],
            [
                'title' => 'Penthouse in Garden City',
                'description' => 'Luxurious 3-bedroom penthouse in Garden City with Nile view.',
                'price' => 15000,
                'location' => 'Garden City, Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'Garden City',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 200,
                'type' => 'Penthouse',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2019,
                'amenities' => json_encode(['Nile View', 'Rooftop Terrace', 'Security', 'Parking']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Dalia Magdy',
                'broker_phone' => '+20 110 123 4567',
                'broker_email' => 'dalia.magdy@realestate.com'
            ],
            [
                'title' => 'Twinhouse in Katameya Heights',
                'description' => 'Elegant 3-bedroom twinhouse in Katameya Heights with garden view.',
                'price' => 10000,
                'location' => 'Katameya Heights, New Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'Katameya Heights',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 180,
                'type' => 'Twinhouse',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['Garden', 'Security', 'Parking', 'Community Pool']),
                'image' => 'https://images.unsplash.com/photo-1600607687929-ee2e8ed3d1d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Ahmed Samir',
                'broker_phone' => '+20 111 234 5678',
                'broker_email' => 'ahmed.samir@realestate.com'
            ],
            // Additional properties to reach 20
            [
                'title' => 'Commercial Space in Mall of Egypt',
                'description' => 'Prime retail space in Mall of Egypt, perfect for established brands.',
                'price' => 30000,
                'location' => 'Mall of Egypt, Sheikh Zayed',
                'city' => 'Giza',
                'neighborhood' => 'Sheikh Zayed',
                'bedrooms' => 0,
                'bathrooms' => 1,
                'area' => 100,
                'type' => 'Commercial',
                'status' => 'For Rent',
                'furnished' => false,
                'year_built' => 2017,
                'amenities' => json_encode(['Mall Location', 'Security', 'Parking', 'High Foot Traffic']),
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nourhan Samir',
                'broker_phone' => '+20 121 234 5678',
                'broker_email' => 'nourhan.samir@realestate.com'
            ],
            [
                'title' => 'Office Space in New Capital',
                'description' => 'Modern office space in the New Administrative Capital, ideal for corporate headquarters.',
                'price' => 20000,
                'location' => 'New Capital, Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'New Capital',
                'bedrooms' => 0,
                'bathrooms' => 3,
                'area' => 150,
                'type' => 'Office',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2022,
                'amenities' => json_encode(['High-Speed Internet', 'Security', 'Parking', 'Meeting Rooms']),
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Tarek Mohamed',
                'broker_phone' => '+20 122 345 6789',
                'broker_email' => 'tarek.mohamed@realestate.com'
            ],
            [
                'title' => 'Studio in New Cairo',
                'description' => 'Modern studio apartment in New Cairo, perfect for students and young professionals.',
                'price' => 4000,
                'location' => 'New Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 50,
                'type' => 'Apartment',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['Security', 'Parking', 'Elevator', '24/7 Security']),
                'image' => 'https://images.unsplash.com/photo-1522708323590-d24d6876d7c1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Mona Adel',
                'broker_phone' => '+20 123 456 7890',
                'broker_email' => 'mona.adel@realestate.com'
            ],
            [
                'title' => 'Penthouse in New Cairo',
                'description' => 'Luxurious 4-bedroom penthouse in New Cairo with panoramic city views.',
                'price' => 18000,
                'location' => 'New Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 220,
                'type' => 'Penthouse',
                'status' => 'For Rent',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['Rooftop Terrace', 'Security', 'Parking', 'Elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687929-ee2e8ed3d1d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nourhan Samir',
                'broker_phone' => '+20 114 567 8901',
                'broker_email' => 'nourhan.samir@realestate.com'
            ],
            [
                'title' => 'Twinhouse in Madinaty',
                'description' => 'Modern 3-bedroom twinhouse in Madinaty with premium finishes and garden view.',
                'price' => 4200000,
                'location' => 'Madinaty, New Cairo',
                'city' => 'Cairo',
                'neighborhood' => 'Madinaty',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 200,
                'type' => 'Twinhouse',
                'status' => 'For Sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['Garden', 'Security', 'Parking', 'Community Pool']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Amr Khalil',
                'broker_phone' => '+20 115 678 9012',
                'broker_email' => 'amr.khalil@realestate.com'
            ],
            [
                'title' => 'Villa in Marassi',
                'description' => 'Luxury 5-bedroom villa in Marassi with private beach access and stunning sea views.',
                'price' => 15000000,
                'location' => 'Marassi, North Coast',
                'city' => 'North Coast',
                'neighborhood' => 'Marassi',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 400,
                'type' => 'Villa',
                'status' => 'For Sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['Private Beach', 'Garden', 'Swimming Pool', 'Security']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Karim Adel',
                'broker_phone' => '+20 116 789 0123',
                'broker_email' => 'karim.adel@realestate.com'
            ],
            [
                'title' => 'Apartment in San Stefano',
                'description' => 'Stunning 3-bedroom apartment with direct sea views in the prestigious San Stefano area.',
                'price' => 5500000,
                'location' => 'San Stefano, Alexandria',
                'city' => 'Alexandria',
                'neighborhood' => 'San Stefano',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 150,
                'type' => 'Apartment',
                'status' => 'For Sale',
                'furnished' => true,
                'year_built' => 2019,
                'amenities' => json_encode(['Sea View', 'Security', 'Parking', 'Elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nourhan Samir',
                'broker_phone' => '+20 117 890 1234',
                'broker_email' => 'nourhan.samir@realestate.com'
            ],
            [
                'title' => 'Luxury Villa in Madinaty',
                'description' => 'Stunning 5-bedroom villa with private pool and garden in prestigious Madinaty.',
                'price' => 7500000,
                'location' => 'Madinaty',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 350,
                'type' => 'villa',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['swimming_pool', 'garden', 'security', 'parking', 'gym']),
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Ahmed Samir',
                'broker_phone' => '+201234567900',
                'broker_email' => 'ahmed.samir@example.com',
            ],
            [
                'title' => 'Modern Apartment in Garden City',
                'description' => 'Elegant 3-bedroom apartment with Nile view in Garden City.',
                'price' => 4500000,
                'location' => 'Garden City',
                'city' => 'Cairo',
                'neighborhood' => 'Garden City',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 200,
                'type' => 'apartment',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['nile_view', 'security', 'parking', 'elevator', 'gym']),
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nourhan Adel',
                'broker_phone' => '+201234567901',
                'broker_email' => 'nourhan.adel@example.com',
            ],
            [
                'title' => 'Penthouse in New Capital',
                'description' => 'Luxury penthouse with panoramic views in the New Administrative Capital.',
                'price' => 9000000,
                'location' => 'New Capital',
                'city' => 'Cairo',
                'neighborhood' => 'New Capital',
                'bedrooms' => 4,
                'bathrooms' => 4,
                'area' => 300,
                'type' => 'penthouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2022,
                'amenities' => json_encode(['city_view', 'swimming_pool', 'gym', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Karim Hassan',
                'broker_phone' => '+201234567902',
                'broker_email' => 'karim.hassan@example.com',
            ],
            [
                'title' => 'Twinhouse in Katameya Heights',
                'description' => 'Modern twinhouse with garden view in Katameya Heights.',
                'price' => 5500000,
                'location' => 'Katameya Heights',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 250,
                'type' => 'twinhouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['garden', 'security', 'parking', 'community_pool']),
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Layla Mohamed',
                'broker_phone' => '+201234567903',
                'broker_email' => 'layla.mohamed@example.com',
            ],
            [
                'title' => 'Villa in Porto Marina',
                'description' => 'Luxury 6-bedroom villa with sea view in Porto Marina.',
                'price' => 15000000,
                'location' => 'Porto Marina',
                'city' => 'North Coast',
                'neighborhood' => 'Porto Marina',
                'bedrooms' => 6,
                'bathrooms' => 5,
                'area' => 400,
                'type' => 'villa',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2022,
                'amenities' => json_encode(['sea_view', 'private_beach', 'swimming_pool', 'garden', 'security', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1600607687644-c7171b42498b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Omar Samir',
                'broker_phone' => '+201234567904',
                'broker_email' => 'omar.samir@example.com',
            ],
            [
                'title' => 'Apartment in Zamalek',
                'description' => 'Elegant 2-bedroom apartment in the heart of Zamalek.',
                'price' => 3500000,
                'location' => 'Zamalek',
                'city' => 'Cairo',
                'neighborhood' => 'Zamalek',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 150,
                'type' => 'apartment',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2019,
                'amenities' => json_encode(['nile_view', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Nadia Ali',
                'broker_phone' => '+201234567905',
                'broker_email' => 'nadia.ali@example.com',
            ],
            [
                'title' => 'Penthouse in Sheikh Zayed',
                'description' => 'Luxury penthouse with city views in Sheikh Zayed.',
                'price' => 6500000,
                'location' => 'Sheikh Zayed',
                'city' => 'Giza',
                'neighborhood' => 'Sheikh Zayed',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 220,
                'type' => 'penthouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['city_view', 'rooftop_terrace', 'security', 'parking', 'elevator']),
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Hassan Adel',
                'broker_phone' => '+201234567906',
                'broker_email' => 'hassan.adel@example.com',
            ],
            [
                'title' => 'Twinhouse in Mountain View',
                'description' => 'Modern twinhouse with mountain view in Mountain View compound.',
                'price' => 6000000,
                'location' => 'Mountain View',
                'city' => 'Cairo',
                'neighborhood' => 'New Cairo',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 280,
                'type' => 'twinhouse',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2022,
                'amenities' => json_encode(['mountain_view', 'garden', 'security', 'parking', 'community_pool']),
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Samir Hassan',
                'broker_phone' => '+201234567907',
                'broker_email' => 'samir.hassan@example.com',
            ],
            [
                'title' => 'Villa in Alamein',
                'description' => 'Luxury 5-bedroom villa with sea view in Alamein.',
                'price' => 12000000,
                'location' => 'Alamein',
                'city' => 'North Coast',
                'neighborhood' => 'Alamein',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 350,
                'type' => 'villa',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2021,
                'amenities' => json_encode(['sea_view', 'private_beach', 'swimming_pool', 'garden', 'security', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1600607687644-c7171b42498b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Fatma Karim',
                'broker_phone' => '+201234567908',
                'broker_email' => 'fatma.karim@example.com',
            ],
            [
                'title' => 'Apartment in Maadi',
                'description' => 'Modern 3-bedroom apartment in Maadi with premium finishes.',
                'price' => 4000000,
                'location' => 'Maadi',
                'city' => 'Cairo',
                'neighborhood' => 'Maadi',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 180,
                'type' => 'apartment',
                'status' => 'for_sale',
                'furnished' => true,
                'year_built' => 2020,
                'amenities' => json_encode(['security', 'parking', 'elevator', 'gym']),
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'broker_name' => 'Youssef Nour',
                'broker_phone' => '+201234567909',
                'broker_email' => 'youssef.nour@example.com',
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
