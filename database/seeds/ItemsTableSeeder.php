<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' =>  'Abney Hand Level', 'description' => 'Oaklet' ],
            [ 'name' =>  'Adapter', 'description' => 'Kimax, USA, 30 mm x 200 mm' ],
            [ 'name' =>  'Adapter', 'description' => 'Brandless, 30 mm x 195 mm' ],
            [ 'name' =>  'Air Con', 'description' => 'Carrier, Concepcion Industries' ],
            [ 'name' =>  'Ammeter', 'description' => 'Kyoritsu, Model KEW-EDM,' ],
            [ 'name' =>  'Ammeter', 'description' => 'Range 1A/5A DC' ],            [ 'name' =>  'Aquarium', 'description' => 'Glass, 23.5"x11.5"x14"' ],
            [ 'name' =>  'Aquarium Air Pump', 'description' => 'NS-B1' ],
            [ 'name' =>  'Aquarium Air Pump', 'description' => 'Besta B-II' ],
            [ 'name' =>  'Aspirator Bulb', 'description' => 'Rubber' ],
            [ 'name' =>  'Autoclave', 'description' => 'Vertical, electric, Precision, Scientific, 220 V, 2-gal cap., 14"x26", All American, US Mfr.,w/ support rack & removable container' ],
            [ 'name' =>  'Automatic Voltage Regulator', 'description' => 'Autovol, Nikko, N-500VA' ],
            [ 'name' =>  'Auto Numbering Machine', 'description' => 'Lion, Model C-71' ],
            [ 'name' =>  'Balance', 'description' => 'Analytical' ],
            [ 'name' =>  'Barometer', 'description' => 'Aneroid, Demonstration, Takahashi Osaka,' ],
            [ 'name' =>  'Barometer', 'description' => 'SN: 5978' ],
            [ 'name' =>  'Basin', 'description' => 'Plastic' ],
            [ 'name' =>  'Basin', 'description' => '-Big' ],
            [ 'name' =>  'Bell', 'description' => 'Orchid callbell, black base' ],
            [ 'name' =>  'Bell', 'description' => 'Brandless, blue base' ],
            [ 'name' =>  'Blender', 'description' => 'Waring, Model 11B117, 1-L cap.' ],
            [ 'name' =>  'BOD Bottle', 'description' => 'Clear glass, w/ tapered glass stopper, 300-ml cap., Wheaton' ],
            [ 'name' =>  'BOD Bottle', 'description' => 'Nos. 43, 68 & 234' ],
            [ 'name' =>  'Borer', 'description' => 'Cork, bronze, 6-pc set' ],
            [ 'name' =>  'Bulb', 'description' => 'G.E.' ],
            [ 'name' =>  'Bulb', 'description' => 'Philips, Holland' ],
            [ 'name' =>  'Bunsen Burner', 'description' => 'Tirill Type, US Mfr., PN 6200.1, w/' ],
            [ 'name' =>  'Burette', 'description' => 'Acid, DIN, w/ glass stopcock, 50-ml cap., 0.1ml grad., 0.1ml tolerance, made in W. Germany' ],
            [ 'name' =>  'Burette Brush', 'description' => '36" long, w/ a large handle loop' ],
            [ 'name' =>  'Cabinet', 'description' => 'Display, 6-shelves, 2-swing doors,' ],
            [ 'name' =>  'Calculator', 'description' => 'Scientific, Casio, 10-digit' ],
            [ 'name' =>  'Calculator', 'description' => '-fx-140' ],
            [ 'name' =>  'Caliper', 'description' => 'Micrometer, China, 0-25 mm, w/ box' ],
            [ 'name' =>  'Calorimeter', 'description' => 'Double wall, aluminum, 4 1/2" diameter' ],
            [ 'name' =>  'Camera', 'description' => 'Split-Image Finder, Asahi, Pentax, K1000' ],
            [ 'name' =>  'Centrifuge', 'description' => 'Electric, Safeguard, Clay Adams, 115 V' ],
            [ 'name' =>  'Chair', 'description' => 'Ordinary, rattan seat' ],
            [ 'name' =>  'Chart', 'description' => 'Periodic Table of the Elements, wooden, @ Chem. Lab' ],
            [ 'name' =>  'Chromatographic Column', 'description' => 'Kimax, USA' ],
            [ 'name' =>  'Chromatographic Column', 'description' => '-530 mm x 30 mm' ],
            [ 'name' =>  'Clamp', 'description' => 'Buret, double, plastic-coated jaws, green' ],
            [ 'name' =>  'Clinostat', 'description' => 'Electric, Griffin & George Ltd, 230 V' ],
            [ 'name' =>  'Cloud Chamber', 'description' => 'Hand operated, Shimadzu, Wilson,' ],
            [ 'name' =>  'Cloud Chamber', 'description' => 'SN: 534676' ],
            [ 'name' =>  'Colorimeter', 'description' => 'Spectronic 20, Bausch & Lomb, w/ 1/2" test tubes, Cat. No. 33-17-80, accessory for spectrophotometer' ],
            [ 'name' =>  'Compass', 'description' => 'Staffhead, Tamaya, 4" diam., w/ case  &' ],
            [ 'name' =>  'Concave Microslides', 'description' => 'Gold Seal, Clay Adams, No. 3010' ],
            [ 'name' =>  'Concave Microslides', 'description' => '-Single Concavity' ],
            [ 'name' =>  'Condenser', 'description' => 'General purpose for distillation & extraction' ],
            [ 'name' =>  'Condenser', 'description' => '-575 mm x 25 mm' ],
            [ 'name' =>  'Converter', 'description' => 'Power supply, solid state, Spartan,' ],
            [ 'name' =>  'Converter', 'description' => 'Model 691224-3A' ],
            [ 'name' =>  'Cork Board', 'description' => '1 m x 1 m' ],
            [ 'name' =>  'Counting Chamber', 'description' => 'Hausser Scientific Partnership,' ],
            [ 'name' =>  'Crucible', 'description' => 'Big, w/ cover, porcelain' ],
            [ 'name' =>  'Cutter', 'description' => 'Lion City, paper cutter w/ board' ],
            [ 'name' =>  'Desk', 'description' => 'Junior., Executive, 3-side drawers, 1-center drawer, w/ glass top, 53 1/2"x28"x30"' ],
            [ 'name' =>  'Dessicator', 'description' => '240 mm w/ porcelain plate' ],
            [ 'name' =>  'Dissecting Pan', 'description' => 'Aluminum, rectangular, 11"x7"' ],
            [ 'name' =>  'Dissecting Pan', 'description' => '-w/ wax' ],
            [ 'name' =>  'Dissecting Set', 'description' => 'For cat, blue case' ],
            [ 'name' =>  'D. O. Meter', 'description' => 'YSI, Model No. 57, SN: 8356' ],
            [ 'name' =>  'Drainer', 'description' => 'General, 16 1/2"x16 1/2"x13", gray' ],
            [ 'name' =>  'Drawing Attachment', 'description' => 'For AO Microstar Microscopes, Cat.' ],
            [ 'name' =>  'Drawing Attachment', 'description' => 'No. 1030' ],
            [ 'name' =>  'Dynamic Cart', 'description' => 'Principle of Momentum, 3-wheeled,' ],
            [ 'name' =>  'Dynamic Cart', 'description' => 'wooden, 10" long' ],
            [ 'name' =>  'Electric Hot Plate', 'description' => 'Corning, Model PC-35' ],
            [ 'name' =>  'Electric Stove', 'description' => 'Northern Hill, Model NH 1500,' ],
            [ 'name' =>  'Electric Stove', 'description' => 'SN: KAM 9800' ],
            [ 'name' =>  'Electroscope', 'description' => 'Metal case' ],
            [ 'name' =>  'Evaporating Dish', 'description' => 'w/ pour-out' ],
            [ 'name' =>  'Distilling', 'description' => 'Round bottom w/ side arm' ],
            [ 'name' =>  'Foot Candle Meter', 'description' => 'Illuminometer, Kyoritsu, Model 5200,' ],
            [ 'name' =>  'Foot Candle Meter', 'description' => 'SN: 820816' ],
            [ 'name' =>  'Funnel Tube', 'description' => 'Thistle top, brandless' ],
            [ 'name' =>  'Funnel Tube', 'description' => 'W/ wide flared top, stem length 300 mm' ],
            [ 'name' =>  'Galvanometer', 'description' => 'Kyoritsu, Model EDM, Range 50 uA DC' ],
            [ 'name' =>  'Galvanometer', 'description' => 'SN: 052193' ],
            [ 'name' =>  'Generator', 'description' => 'Magnetic, electric' ],
            [ 'name' =>  'Glass Beads', 'description' => '6 mm, solid' ],
            [ 'name' =>  'Gyroscope', 'description' => 'Bicycle wheel' ],
            [ 'name' =>  'Hand Tally Counter', 'description' => 'Plus' ],
            [ 'name' =>  'Hemacytometer', 'description' => 'AO Spencer, Counter Skudom Thoma' ],
            [ 'name' =>  'Hemacytometer', 'description' => 'Cell' ],
            [ 'name' =>  'Hydrometer', 'description' => 'Double Scale, .700-1.000 & 70 to 10' ],
            [ 'name' =>  'Hydrometer Set', 'description' => 'Hydrometer Baumes & Specific Gravity' ],
            [ 'name' =>  'Hydrometer Set', 'description' => 'Scale 1.000-2.000, Temp 15°C, 8-pc set' ],
            [ 'name' =>  'Incubator', 'description' => 'Electric, Heraeus, Model 5028,' ],
            [ 'name' =>  'Incubator', 'description' => 'SN: 8001299' ],
            [ 'name' =>  'Inoculating Chamber', 'description' => 'Wooden, w/ glass top, 35.5"x23.5"x23.5"' ],
            [ 'name' =>  'Inoculating Loop', 'description' => 'Aluminum' ],
            [ 'name' =>  'Inoculating Loop', 'description' => 'Glass' ],
            [ 'name' =>  'Inoculating Needle', 'description' => 'Aluminum' ],
            [ 'name' =>  'Inoculating Needle', 'description' => 'Glass' ],
            [ 'name' =>  'Insect Box', 'description' => 'W/ glass' ],
            [ 'name' =>  'Insect Box', 'description' => '-20"x12"x3"' ],
            [ 'name' =>  'Insect Net', 'description' => 'Aluminum, frame diameter 10", handle length 36"' ],
            [ 'name' =>  'Iron Ring', 'description' => '4" diam., w/ side arm & clamp' ],
            [ 'name' =>  'Iron Stand', 'description' => 'Rectangular base, 25" high' ],
            [ 'name' =>  'Jar', 'description' => 'Bell, glass, for transpiration' ],
            [ 'name' =>  'Kymograph', 'description' => 'W/ accessories' ],
            [ 'name' =>  'Laboratory Sink', 'description' => 'Concrete-made, built-in @ lab office,' ],
            [ 'name' =>  'Laboratory Sink', 'description' => '57.5"x36"x34"' ],
            [ 'name' =>  'Lens', 'description' => 'Achromatic, 20x, Marx, Japan' ],
            [ 'name' =>  'Level', 'description' => 'Dumpy, Osaka Tamaya, w/ case,' ],
            [ 'name' =>  'Level', 'description' => 'SN: 770031' ],
            [ 'name' =>  'Life Vest', 'description' => 'Adult, orange' ],
            [ 'name' =>  'Magnet', 'description' => 'Bar, Japan, No. 1508-4, 6.5" long' ],
            [ 'name' =>  'Medicine Dropper', 'description' => 'Glass' ],
            [ 'name' =>  'Medicine Dropper', 'description' => 'Plastic' ],
            [ 'name' =>  'Meter Stick', 'description' => 'Made of hardwood, w/ a light permanently engraved scale, easy to read black line, both edges of one face is graduated' ],
            [ 'name' =>  'Micro-Capillary Reader', 'description' => 'Damon/IEC Division, circular type, Cat.' ],
            [ 'name' =>  'Micro-Capillary Reader', 'description' => 'No. 2201, SN: 22014253' ],
            [ 'name' =>  'Micrometer Disc', 'description' => 'Bausch & Lomb, No. 31-16-05, w/ case, Scale 5 mm' ],
            [ 'name' =>  'Micrometer Eyepiece', 'description' => '10x' ],
            [ 'name' =>  'Micrometer Stage', 'description' => 'AO, 2 mm div. into units of 0.01 mm,' ],
            [ 'name' =>  'Microprojector', 'description' => 'Ken-A-Vision, Model X1000-1,SN:9933' ],
            [ 'name' =>  'Microtome', 'description' => 'Custom, Rotary, manual, Damon/IEC Division, SN: 3310145' ],
            [ 'name' =>  'Microtome Knife', 'description' => '120 mm long, Box No. 387' ],
            [ 'name' =>  'Mirror', 'description' => 'China, 50 mm diameter, 25 cm focus' ],
            [ 'name' =>  'Mirror', 'description' => '-Concave' ],
            [ 'name' =>  'Model', 'description' => 'Animal Brain, B-174-7' ],
            [ 'name' =>  'Moment of Inertia Apparatus', 'description' => 'Round aluminum (4.5" diameter) & wood (24"x5")' ],
            [ 'name' =>  'Mortar and Pestle', 'description' => 'Porcelain, w/ pouring lip' ],
            [ 'name' =>  'Multitester', 'description' => 'Sanwa, YX-360TRs' ],
            [ 'name' =>  'Omniclave', 'description' => 'Model OCM, A3-44950' ],
            [ 'name' =>  'Oscilloscope', 'description' => 'RCA, WO-88A, SN: 9592' ],
            [ 'name' =>  'Oven', 'description' => 'Drying, Memmert, Model-TV, 220V, SN: 790-407' ],
            [ 'name' =>  'Pail', 'description' => 'Plastic, light green' ],
            [ 'name' =>  'Pencil Sharpener', 'description' => 'Prince, PS-1' ],
            [ 'name' =>  'Pendulum', 'description' => 'Ballistic' ],
            [ 'name' =>  'Pendulum Bob', 'description' => 'Metal, local, ball bearing, 4-pc set' ],
            [ 'name' =>  'Petri Dish', 'description' => 'Kimax' ],
            [ 'name' =>  'pH Meter', 'description' => 'Corning, Model 7, 220V, w/ accessories: Electrode Lead/pH, Ion Selective Electrode (Corning, pH triple purpose, Cat. No. 00311101J, SN: 07452' ],
            [ 'name' =>  'Pipet Rack', 'description' => 'For 1-ml measuring pipet, 12-hole' ],
            [ 'name' =>  'Pith Ball', 'description' => 'Aluminum coated, 6-pc/set' ],
            [ 'name' =>  'Plant Presser', 'description' => 'Wooden' ],
            [ 'name' =>  'Plier', 'description' => 'Flat nose, insulated handle, orange color,' ],
            [ 'name' =>  'Plumb Bob', 'description' => 'Blue color' ],
            [ 'name' =>  'Potentiometer', 'description' => 'Omnilab Scientific' ],
            [ 'name' =>  'Pressure Cooker', 'description' => 'All American, 41-quart cap., w/o support' ],
            [ 'name' =>  'Pressure Cooker', 'description' => 'rack' ],
            [ 'name' =>  'Pulley', 'description' => 'Ball bearing, aluminum, 35 KDD USA' ],
            [ 'name' =>  'Puncher', 'description' => 'Prince, 2-hole punch' ],
            [ 'name' =>  'Quadrat', 'description' => 'Steel, improvised, 1m x1m' ],
            [ 'name' =>  'Reading Glass/Hand Lens', 'description' => 'Magnifying, 2" in diameter' ],
            [ 'name' =>  'Reagent Bottle', 'description' => 'Narrow mouth, round, w/ glass flat-top stopper, 250-ml cap.' ],
            [ 'name' =>  'Refractometer', 'description' => 'Hand, Atago, Japan, S/Mill, Salinity: 0~100%, No. 8808' ],
            [ 'name' =>  'Refrigerator', 'description' => 'G.E., 9 cu. ft., Make 139A 0772, SN: R-100DL, 220V' ],
            [ 'name' =>  'Rheostat', 'description' => 'Cenco, 175 ohm, 1.5 A' ],
            [ 'name' =>  'Rubber Gong', 'description' => 'For tuning fork, 7.3" long' ],
            [ 'name' =>  'Salinometer', 'description' => 'Atago Tanaka, Japan, S-100' ],
            [ 'name' =>  'Scissors', 'description' => 'Metal, 6.8" long' ],
            [ 'name' =>  'Senior Volt Ohmyst', 'description' => 'RCA, Code 1156, Type WV-98A, SN: 24032' ],
            [ 'name' =>  'Set of Weights', 'description' => 'For Analytical Balance, Grade 3, China, SN: 363., 21-pc set = (1) 100-g, (1) 50-g, (2) 20-g, (1) 10-g, (1) 5-g, (2) 2-g, (1) 1-g, (1) 500-mg, (2) 200-mg, (1) 100-mg, (1) 50-mg, (2) 20-mg, (1) 10-mg, (1) 5-mg, (2) 2-mg, (1) 1-mg' ],
            [ 'name' =>  'Shelf', 'description' => 'Lab, 6-open shelves, 36"x17"x32"' ],
            [ 'name' =>  'Slide Warmer', 'description' => 'Everbach, 115V, 45W' ],
            [ 'name' =>  'Soldering Gun', 'description' => 'Weller, 8200D, 100/140W, 220/240V' ],
            [ 'name' =>  'Soxhlet', 'description' => 'Condenser, Kimax USA' ],
            [ 'name' =>  'Spatula', 'description' => 'Stainless, steel' ],
            [ 'name' =>  'Spatula', 'description' => '-big' ],
            [ 'name' =>  'Spectrophotometer', 'description' => 'Spectronic 20, Bausch & Lomb,' ],
            [ 'name' =>  'Spectrophotometer', 'description' => 'SN: 0718080Y' ],
            [ 'name' =>  'Spin Bar', 'description' => 'Magnetic' ],
            [ 'name' =>  'Spot Plate', 'description' => 'Glass, 9-hole' ],
            [ 'name' =>  'Stadia Rod', 'description' => 'Wooden, orange, 3 m' ],
            [ 'name' =>  'Stand', 'description' => 'For funnel, wooden, blue, 5-hole' ],
            [ 'name' =>  'Stapler', 'description' => 'No. 10' ],
            [ 'name' =>  'Sterilizer', 'description' => 'Electric, stainless steel' ],
            [ 'name' =>  'Stirring Rod', 'description' => 'Glass, 10" long' ],
            [ 'name' =>  'Stirrir', 'description' => 'Magnetic, Globe, Shanghai China, Model 791, Lot No. 9882' ],
            [ 'name' =>  'Stopper', 'description' => 'Rubber' ],
            [ 'name' =>  'Stopwatch', 'description' => 'Brandless, white' ],
            [ 'name' =>  'Syracuse Dish', 'description' => 'Clear glass, w/ a groove in the bottom & beveled for stacking' ],
            [ 'name' =>  'Tank', 'description' => 'LPG' ],
            [ 'name' =>  'Tape', 'description' => 'Measuring, fiber glass, 50m, KYK Tools' ],
            [ 'name' =>  'Telescope', 'description' => 'Shimadzu N53' ],
            [ 'name' =>  'Test Tube', 'description' => '10" length' ],
            [ 'name' =>  'Test Tube', 'description' => '8" length' ],
            [ 'name' =>  'Test Tube Brush', 'description' => 'Straight tuft w/ separate tufted end &' ],
            [ 'name' =>  'Test Tube Brush', 'description' => 'large loop handle' ],
            [ 'name' =>  'Test Tube Holder', 'description' => 'Made of wire w/ curved quadrangular jaws, 5.5" long' ],
            [ 'name' =>  'Test Tube Rack', 'description' => 'Wooden' ],
            [ 'name' =>  'Test Tube Rack', 'description' => '-big, 18-hole' ],
            [ 'name' =>  'Thermometer', 'description' => 'Clinical, Japan, 1M.C' ],
            [ 'name' =>  'Thermos Bottle', 'description' => 'Ching Kiang Brand, China' ],
            [ 'name' =>  'Timer', 'description' => 'Electric, Gralab, Model 173' ],
            [ 'name' =>  'Tongs', 'description' => 'Crucible, small' ],
            [ 'name' =>  'Transformer', 'description' => 'Demonstration, Triad, SN: 6035' ],
            [ 'name' =>  'Tray', 'description' => 'Aluminum, 18"x14"' ],
            [ 'name' =>  'Tripod', 'description' => 'Iron, for bunsen burner' ],
            [ 'name' =>  'Trough', 'description' => 'Galvanized iron, w/ rolled edge & overflow tube, 10"x7 1/2"' ],
            [ 'name' =>  'Tuning Fork', 'description' => 'Electrically driven, Komet' ],
            [ 'name' =>  'Typewriter', 'description' => 'Olympia, portable, 458104' ],
            [ 'name' =>  'Voltmeter', 'description' => 'Hangchow, J-DB4XA, 0-15V' ],
            [ 'name' =>  'Wash Bottle', 'description' => 'Narrow mouth, cap & nozzle molded in one piece' ],
            [ 'name' =>  'Watch Glass', 'description' => 'Brandless, 2.4" to 4.8" diameter' ],
            [ 'name' =>  'Water Bath', 'description' => 'Aluminum, 6" diameter, 2.5" depth' ],
            [ 'name' =>  'Water Container', 'description' => 'Plastic' ],
            [ 'name' =>  'Water Container', 'description' => '-Blue, Orocan, 48L cap.' ],
            [ 'name' =>  'Water Distilling Apparatus', 'description' => 'Monodest, Model 30000' ],
            [ 'name' =>  'Water Distilling Apparatus', 'description' => 'SN: 09MO84' ],
            [ 'name' =>  'Wheel and Axle', 'description' => 'Aluminum' ],
            [ 'name' =>  'Wire Gauze', 'description' => 'Squares, made of wire w/ turned edges' ],
            [ 'name' =>  'Wire', 'description' => 'Nichrome' ],
            [ 'name' =>  'Aspirator Bulb', 'description' => 'Rubber' ],
            [ 'name' =>  'Autoclave', 'description' => 'Clinical, Prestige, Extended Type, Medical Series 2100, Model No. 210002, SN: FJ21028, Made in England' ],
            [ 'name' =>  'Balance', 'description' => 'Precision, Basic Life, Sartorius, Model BL610, SN: 91203925' ],
            [ 'name' =>  'D.O. Meter', 'description' => 'YSI, Model 51B, SN: 95L43658' ],
            [ 'name' =>  'Milliammeter', 'description' => 'Camsco, Model 670, Range DC-50mA' ],
            [ 'name' =>  'Multitester', 'description' => 'Sunwa, YX-360TRD' ],
            [ 'name' =>  'Petri Dish', 'description' => 'Anumbra' ],
            [ 'name' =>  'Screw Driver', 'description' => 'Stanley, 6-pc set = 1 pt. Phillips, 2 pt.' ],
            [ 'name' =>  'Screw Driver', 'description' => 'Phillips, 3¯ cabinet, 4¯ standard,' ],
            [ 'name' =>  'Test Tube', 'description' => 'Brandless, 150"x16"' ],
            [ 'name' =>  'Voltmeter', 'description' => 'Camsco, Type YH670, Model 670, Range DC, 0-15 V' ],
            [ 'name' =>  'Wire Gauze', 'description' => 'Squares, made of wire w/ turned edges' ],
        ];
        //Model::insert($data); // Eloquent
        //DB::table('items')->insert($data); // Query Builder
        foreach($data as $item){
            App\Item::insert($item);
        }
    }
}
