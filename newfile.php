<?php

$materials = array(
    
    // ---------------------------------------------------
    // MATERIALS
    // ---------------------------------------------------
    
    'Iron Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Iron Ore' => 5
        )
    ),
    'Copper Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Copper Ore' => 5
        )
    ),
    'Silicon Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Silicon Ore' => 5
        )
    ),
    'Cobalt Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Cobalt Ore' => 5
        )
    ),
    'Neodymium Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Neodymium Ore' => 5
        )
    ),
    'Sathium Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Sathium Ore' => 5
        )
    ),
    'Erestrum Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Erestrum Ore' => 5
        )
    ),
    'Zascosium Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Zascosium Ore' => 5
        )
    ),
    'Gold Ingot' => array(
        'type' => 'refined',
        'requires' => array(
            'Gold Ore' => 5
        )
    ),
    'Zascosium Alloy' => array(
        'type' => 'refined',
        'requires' => array(
            'Erestrum Ingot' => 5,
            'Zascosium Ingot' => 5
        )
    ),
    'Erestrum Gel' => array(
        'type' => 'refined',
        'requires' => array(
            'Erestrum Ingot' => 2
        )
    ),
    'Elemental Pentaxid' => array(
        'type' => 'refined',
        'requires' => array(
            'Pentaxid' => 1
        )
    ),
    'Refined Pentaxid' => array(
        'type' => 'refined',
        'requires' => array(
            'Pentaxid' => 1
        )
    ),
    'Promethium Pellets' => array(
        'type' => 'refined',
        'requires' => array(
            'Promethium Ore' => 1
        )
    ),
    'Water Container' => array(
        'type' => 'refined',
        'requires' => array(
            'Ice Blocks' => 5
        )
    ),
    'Purified Water' => array(
        'type' => 'refined',
        'requires' => array(
            'Water Container' => 1
        )
    ),
    'Plant Fibers' => array(
        'type' => 'refined',
        'requires' => array(
            'Wood Logs' => 1
        )
    ),
    'Cement' => array(
        'type' => 'refined',
        'requires' => array(
            'Stone Dust' => 2
        )
    ),
    'Wood Planks' => array(
        'type' => 'refined',
        'requires' => array(
            'Wood Logs' => 1
        )
    ),
    'Nitrocellulose' => array(
        'type' => 'refined',
        'requires' => array(
            'Plant Fibers' => 1
        )
    ),
    'Carbon Substrate' => array(
        'type' => 'refined',
        'requires' => array(
            'Plant Fibers' => 4,
            'Stone Dust' => 1
        )
    ),
    'Magnesium Powder' => array(
        'type' => 'refined',
        'requires' => array(
            'Magnesium Ore' => 5
        )
    ),
    'Stone Dust' => array(
        'type' => 'refined',
        'requires' => array(
            'Crushed Stone' => 5
        )
    ),
    
    
    // ---------------------------------------------------
    // FUEL
    // ---------------------------------------------------
    
    'Fuel Pack' => array(
        'type' => 'fuel',
        'requires' => array(
            'Promethium Pellets' => 10
        )
    ),
    'Large Fuel Pack' => array(
        'type' => 'fuel',
        'requires' => array(
            'Promethium Pellets' => 50
        )
    ),
    'Fusion Cell' => array(
        'type' => 'refined',
        'requires' => array(
            'Promethium Pellets' => 50,
            'Hydrogen Bottle' => 10
        )
    ),
    
    
    // ---------------------------------------------------
    // COMPONENTS
    // ---------------------------------------------------
    
    
    'Steel Plate' => array(
        'type' => 'component',
        'requires' => array(
            'Iron Ingot' => 2
        )
    ),
    'Energy Matrix' => array(
        'type' => 'component',
        'requires' => array(
            'Cobalt Ingot' => 2,
            'Copper Ingot' => 1,
            'Silicon Ingot' => 1
        )
    ),
    'Electronics' => array(
        'type' => 'component',
        'requires' => array(
            'Copper Ingot' => 2,
            'Silicon Ingot' => 1
        )
    ),
    'Glass Plate' => array(
        'type' => 'component',
        'requires' => array(
            'Silicon Ingot' => 1
        )
    ),
    'Optical Fiber' => array(
        'type' => 'component',
        'requires' => array(
            'Silicon Ingot' => 1
        )
    ),
    'Mechanical Components' => array(
        'type' => 'component',
        'requires' => array(
            'Steel Plate' => 1
        )
    ),
    'Nanotubes' => array(
        'type' => 'component',
        'requires' => array(
            'Carbon Substrate' => 1
        )
    ),
    'Titanium Rods' => array(
        'type' => 'component',
        'requires' => array(
            'Titanium Ore' => 5
        )
    ),
    'Titanium Plates' => array(
        'type' => 'component',
        'requires' => array(
            'Titanium Rods' => 5
        )
    ),
    'Aluminum Powder' => array(
        'type' => 'component',
        'requires' => array(
            'Aluminum Ore' => 5
        )
    ),
    'Aluminum Coil' => array(
        'type' => 'component',
        'requires' => array(
            'Aluminum Powder' => 5
        )
    ),
    'Platinum Ingots' => array(
        'type' => 'component',
        'requires' => array(
            'Platinum Ore' => 5
        )
    ),
    'Platinum Bar' => array(
        'type' => 'component',
        'requires' => array(
            'Platinum Ingots' => 1
        )
    ),
    'Computer' => array(
        'type' => 'component',
        'requires' => array(
            'Steel Plate' => 1,
            'Optical Fiber' => 1,
            'Electronics' => 2
        )
    ),
    'Motor' => array(
        'type' => 'component',
        'requires' => array(
            'Steel Plate' => 2,
            'Nanotubes' => 3,
            'Electronics' => 1
        )
    ),
    'Cobalt Alloy' => array(
        'type' => 'component',
        'requires' => array(
            'Cobalt Ingot' => 3,
            'Iron Ingot' => 2
        )
    ),
    'Sathium Plates' => array(
        'type' => 'component',
        'requires' => array(
            'Sathium Ingot' => 5
        )
    ),
    'Capacitor Device' => array(
        'type' => 'component',
        'requires' => array(
            'Oscillator' => 4,
            'Nanotubes' => 3,
            'Steel Plate' => 3
        )
    ),
    'Oscillator' => array(
        'type' => 'component',
        'requires' => array(
            'Neodymium Ingot' => 5,
            'Cobalt Ingot' => 2,
            'Titanium Rods' => 2
        )
    ),
    'Flux Coil' => array(
        'type' => 'component',
        'requires' => array(
            'Titanium Rods' => 2,
            'Neodymium Ingot' => 5,
            'Cobalt Ingot' => 2
        )
    ),
    'Power Coil' => array(
        'type' => 'component',
        'requires' => array(
            'Erestrum Ingot' => 8,
            'Zascosium Ingot' => 8,
            'Flux Coil' => 1
        )
    ),
    'Gold Coins' => array(
        'type' => 'component',
        'requires' => array(
            'Gold Ingot' => 1
        )
    ),
    'Hydrogen Bottle' => array(
        'type' => 'component',
        'requires' => array(
            'Water Container' => 5,
            'Steel Plate' => 2
        )
    ),
    'Bio Fuel' => array(
        'type' => 'component',
        'requires' => array(
            'Plant Fibers' => 10
        )
    ),
    'Small Optronic Bridge' => array(
        'type' => 'component',
        'requires' => array(
            'Gold Ingot' => 15,
            'Electronics' => 125,
            'Oscillator' => 80
        )
    ),
    'Small Optronic Matrix' => array(
        'type' => 'component',
        'requires' => array(
            'Gold Ingot' => 20,
            'Computer' => 100,
            'Energy Matrix' => 20
        )
    ),
    'Large Optronic Bridge' => array(
        'type' => 'component',
        'requires' => array(
            'Gold Ingot' => 15,
            'Small Optronic Bridge' => 1,
            'Oscillator' => 80,
            'Zascosium Alloy' => 50
        )
    ),
    'Large Optronic Matrix' => array(
        'type' => 'component',
        'requires' => array(
            'Gold Ingot' => 20,
            'Small Optronic Matrix' => 1,
            'Power Coil' => 10,
            'Erestrum Gel' => 20
        )
    ),
    
    
    // ----------------------------------------------------
    // MODULES
    // ----------------------------------------------------
    
    
    'Sensors and Signals' => array(
        'type' => 'module',
        'requires' => array(
            'BA,CV' => array(
                'Electronics' => 2,
                'Mechanical Components' => 4
            )
        )
    ),
    'Sensors and Signals' => array(
        'type' => 'module',
        'requires' => array(
            'HV,SV' => array(
                'Electronics' => 2,
                'Mechanical Components' => 2
            )
        )
    ),
    'LCD Screens' => array(
        'type' => 'module',
        'requires' => array(
            'ALL' => array(
                'Electronics' => 3,
                'Carbon Substrate' => 2,
                'Computer' => 2
            )
        )
    ),
    'Core' => array(
        'type' => 'module',
        'requires' => array(
            'ALL' => array(
                'Steel Plate' => 6,
                'Electronics' => 4,
                'Computer' => 5,
                'Optical Fiber' => 3
            )
        )
    ),
    'Automatic Doors' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Mechanical Components' => 2,
                'Electronics' => 2,
                'Steel Plate' => 1
            )
        )
    ),
    'Armored Automatic Doors' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Mechanical Components' => 2,
                'Electronics' => 2,
                'Cobalt Alloy' => 5,
                'Titanium Plates' => 3
            )
        )
    ),
    'Forcefields' => array(
        'type' => 'module',
        'requires' => array(
            'ALL' => array(
                'Capacitor Device' => 1,
                'Energy Matrix' => 1,
                'Oscillator' => 4
            )
        )
    ),
    'Manual Doors' => array(
        'type' => 'module',
        'requires' => array(
            'HV,SV' => array(
                'Mechanical Components' => 4,
                'Electronics' => 3,
                'Steel Plate' => 2
            )
        )
    ),
    'Shutter Doors' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Mechanical Components' => 20,
                'Motor' => 1,
                'Optical Fiber' => 2,
                'Electronics' => 2,
                'Steel Plate' => 4
            ),
            'HV,SV' => array(
                'Mechanical Components' => 10,
                'Motor' => 1,
                'Optical Fiber' => 2,
                'Electronics' => 2,
                'Steel Plate' => 2
            )
        )
    ),
    'Hangar Doors' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Mechanical Components' => 20,
                'Motor' => 4,
                'Energy Matrix' => 1,
                'Electronics' => 4,
                'Steel Plate' => 30
            )
        )
    ),
    'Boarding Ramps' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Mechanical Components' => 20,
                'Motor' => 2,
                'Energy Matrix' => 1,
                'Electronics' => 4,
                'Steel Plate' => 10
            )
        )
    ),
    'Ramps' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Steel Plate' => 20,
                'Motor' => 2,
                'Electronics' => 4
            ),
            'HV,SV' => array(
                'Steel Plate' => 10,
                'Motor' => 1,
                'Electronics' => 2
            )
        )
    ),
    'Blast Door Blocks' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Mechanical Components' => 16,
                'Motor' => 6,
                'Flux Coil' => 2,
                'Cobalt Alloy' => 25,
                'Electronics' => 6,
                'Sathium Plates' => 30
            )
        )
    ),
    'Elevator Blocks' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Steel Plate' => 2,
                'Electronics' => 1,
                'Optical Fiber' => 4
            )
        )
    ),
    'ATM' => array(
        'type' => 'module',
        'requires' => array(
            'BA' => array(
                'Electronics' => 3,
                'Steel Plate' => 12,
                'Computer' => 2,
                'Energy Matrix' => 1
            )
        )
    ),
    'Armor Locker' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Electronics' => 3,
                'Steel Plate' => 25,
                'Computer' => 2
            ),
            'HV,SV' => array(
                'Electronics' => 2,
                'Steel Plate' => 25,
                'Computer' => 2
            )
        )
    ),
    'Wireless Connection' => array(
        'type' => 'module',
        'requires' => array(
            'ALL' => array(
                'Electronics' => 3,
                'Optical Fiber' => 5,
                'Computer' => 1
            )
        )
    ),
    'Detector' => array(
        'type' => 'module',
        'requires' => array(
            'HV' => array(
                'Electronics' => 1,
                'Optical Fiber' => 2
            ),
            'SV' => array(
                'Electronics' => 2,
                'Optical Fiber' => 4
            ),
            'CV' => array(
                'Electronics' => 12,
                'Optical Fiber' => 20,
                'Computer' => 6,
                'Cobalt Alloy' => 24,
                'Energy Matrix' => 4,
                'Titanium Plates' => 15
            )
        )
    ),
    'Repair Station' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Power Coil' => 1,
                'Energy Matrix' => 1,
                'Zascosium Alloy' => 5,
                'Optical Fiber' => 10,
                'Nanotubes' => 10
            )
        )
    ),
    'Small Constructor' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Computer' => 1,
                'Steel Plate' => 3,
                'Mechanical Components' => 5,
                'Optical Fiber' => 2,
                'Motor' => 1
            )
        )
    ),
    'Large Constructor' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Computer' => 2,
                'Steel Plate' => 5,
                'Mechanical Components' => 10,
                'Optical Fiber' => 4,
                'Motor' => 2
            )
        )
    ),
    'Advanced Constructor' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Steel Plate' => 10,
                'Optical Fiber' => 4,
                'Mechanical Components' => 10,
                'Motor' => 2,
                'Computer' => 4,
                'Energy Matrix' => 5,
                'Cobalt Alloy' => 50,
                'Flux Coil' => 10
            )
        )
    ),
    'Deconstructor' => array(
        'type' => 'module',
        'requires' => array(
            'BA' => array(
                'Steel Plate' => 5,
                'Mechanical Components' => 10,
                'Motor' => 2,
                'Computer' => 2,
                'Energy Matrix' => 5,
                'Cobalt Alloy' => 50,
                'Flux Coil' => 10
            )
        )
    ),
    'Furnace' => array(
        'type' => 'module',
        'requires' => array(
            'BA' => array(
                'Capacitor Device' => 10,
                'Energy Matrix' => 4,
                'Titanium Plates' => 50,
                'Motor' => 3,
                'Flux Coil' => 5
            )
        )
    ),
    'Repair Console' => array(
        'type' => 'module',
        'requires' => array(
            'CV,BA' => array(
                'Computer' => 2,
                'Power Coil' => 4,
                'Capacitor Device' => 10,
                'Energy Matrix' => 4,
                'Zascosium Alloy' => 25,
                'Cobalt Alloy' => 25,
                'Flux Coil' => 5
            )
        )
    ),
    'Repair Bay' => array(
        'type' => 'module',
        'requires' => array(
            'BA' => array(
                'Power Coil' => 4,
                'Titanium Plates' => 10,
                'Steel Plate' => 10,
                'Capacitor Device' => 10,
                'Energy Matrix' => 4,
                'Zascosium Alloy' => 25
            ),
            'CV' => array(
                'Power Coil' => 4,
                'Steel Plate' => 10,
                'Sathium Plates' => 10,
                'Capacitor Device' => 10,
                'Energy Matrix' => 4,
                'Zascosium Alloy' => 25
            )
        )
    ),
    'Repair Bay T2' => array(
        'type' => 'module',
        'requires' => array(
            'BA' => array(
                'Steel Plate' => 10,
                'Titanium Plates' => 10,
                'Power Coil' => 6,
                'Capacitor Device' => 15,
                'Energy Matrix' => 6,
                'Zascosium Alloy' => 40
            ),
            'CV' => array(
                'Steel Plate' => 10,
                'Sathium Plates' => 10,
                'Power Coil' => 6,
                'Capacitor Device' => 15,
                'Energy Matrix' => 6,
                'Zascosium Alloy' => 40
            )
        )
    ),
    
    // ----------------------------------------------------
    // DEPLOYABLES
    // ----------------------------------------------------
    'Auto Mining Device' => array(
        'type' => 'deployable',
        'requires' => array(
            'Capacitor Device' => 5,
            'Titanium Plates' => 20,
            'Motor' => 4,
            'Flux Coil' => 5,
            'Auto Miner Core' => 1
        )
    ),
    /*
     '' => array(
     'CV,BA' => array(
     '' =>
     )
     )*/
);


file_put_contents('storage/materials.json', json_encode($materials, JSON_PRETTY_PRINT));
