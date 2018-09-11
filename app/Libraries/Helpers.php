<?php 
namespace App\Libraries;
class Helpers {
  const NUMBER_OF_CITY = 64;
  const NUMBER_OF_HOSPITAL = 800;
  const NUMBER_OF_DOCTOR = 4000;
  const USERS = [
    [
      'name' => 'Sumon',
      'email' => 'sumon@gmail.com'
    ],
    [
      'name' => 'Sarwar',
      'email' => 'sarwar@gmail.com'
    ],
    [
      'name' => 'Mojibur',
      'email' => 'mojibur@gmail.com'
    ],
    [
      'name' => 'Tanim',
      'email' => 'tanim@gmail.com'
    ],
    [
      'name' => 'Riazul Hayder',
      'email' => 'riaz@gmail.com'
    ]

  ];
  const DIVISIONS = [1 => "Barisal", 2 => "Chittagong", 3 => "Dhaka", 4 => "Khulna", 5 => "Mymensingh", 6 => "Rajshahi", 7 => "Sylhet", 8 => "Rangpur"];
  const borisal = ["Barguna", "Barisal", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"];
  const chittagong = ["Bandarban", "Brahmanbaria", "Chandpur", "Chittagong", "Comilla", "Cox's bazar", "Feni", "Khagrachhari", "Lakshmipur", "Noakhali", "Rangamati"];
  const dhaka = ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Munshiganj", "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail"];
  const khulna = ["Bagerhat", "Chuadanga", "Jessore", "Jhenaidah", "Khulna", "Kushtia", "Magura", "Meherpur", "Narail", "Satkhira"];
  const mymensingh = ["Jamalpur", "Mymensingh", "Netrakona", "Sherpur"];
  const rajshahi = ["Bogra", "Chapainababganj", "Joypurhat", "Pabna", "Naogaon", "Natore", "Rajshahi", "Sirajganj"];
  const rangpur = ["Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari", "Panchagarh", "Rangpur", "Thakurgaon"];
  const sylhet = ["Habiganj", "Maulvibazar", "Sunamganj", "Sylhet"];
  const DIVISIONS_WITH_CITY  = [
    1 => self::borisal,
    2 => self::chittagong,
    3 => self::dhaka,
    4 => self::khulna,
    5 => self::mymensingh,
    6 => self::rajshahi,
    7 => self::sylhet,
    8 => self::rangpur
  ];
  const DISCIPLINES = ["Acupuncture", "Audiometry and Tympanometry", "Vascular and Thoracic Surgery", "Cardiology", "Casualty/Emergency", "Chest Medicine", "Clinical Psychology", "Dentistry", "Dermatology", "Echocardiography", "Endocrino and Diabetology", "ENT", "Eye (Ophthalmology)", "Gastro Surgery", "Gastroenterology", "General Medicine", "General Surgery", "Gynaecological Laparoscopic Surgery", "Gynaecology Obstetrics", "Homeopathy", "Lactation Management Clinic", "Laparoscopic Surgery", "Nephrology", "Neuro Surgery", "Neurology", "Oncology (Medical)", "Oral and Maxillofacial Surgery", "Orthodontic Surgeon", "Orthopaedics", "Paediatric Surgery", "Paediatrics", "Physical Medicine and Rehabilitation", "Psychiatry", "Reconstructive (Plastic) Surgery", "Rheumatology", "Speech Therapy", "Urology"];
  const DEGREES = ['MBBS', 'BDS', 'MD'];

}