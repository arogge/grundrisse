<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			body { background-color:#777; }
			div { background-color:white; width:1100px; padding:0px; border-style:outset; margin:2em; float:left; }
		</style>
	</head>
	<body>
		<!-- non-displayed svg with patterns and symbol definitions -->
		<svg>
			<pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="8" height="8">
  			<path d="M-2,2 l4,-4 M0,8 l8,-8 M6,10 l4,-4" style="stroke:#aaa; stroke-width:1" />
  		</pattern>
  		<pattern id="stairPattern" patternUnits="userSpaceOnUse" width="20" height="20">
	  		<path d="M0,0 l0,20" style="stroke:#000; stroke-width:1" />
			</pattern>
			<defs>
				<g id="lamp-on">
					<circle cx="0" cy="0" r="8" stroke="black" fill="yellow" />
					<path d="M-8,-8 l16,16 M-8,8 l16,-16" stroke="black" />
				</g>
				<g id="lamp-off">
					<circle cx="0" cy="0" r="8" stroke="black" fill="#eee" />
					<path d="M-8,-8 l16,16 M-8,8 l16,-16" stroke="black" />
				</g>
			</defs>
		</svg>
		<div>
			<svg viewBox="0 0 1168 698">
				<defs>
					<g id="eg-stair">
						<rect width="390" height="98" fill="url(#stairPattern)" stroke="black" />
						<path d="M110,49 l150,0 l-30,10 m0,-20 l30,10" stroke="black" fill="none" />
					</g>
					<g id="og-stair">
						<rect width="308" height="98" fill="url(#stairPattern)" stroke="black" />
						<path d="M70,49 l150,0 l-30,10 m0,-20 l30,10" stroke="black" fill="none" />
					</g>

					<g id="eg-haustuer">
						<path d="M0,0 l98,0 A 98 98 0 0 1 0,98" stroke="#aaa" fill="none" />
					</g>
					<g id="eg-wctuer">
						<path d="M0,0 l0,-68 A 68 68 0 0 1 68,0" stroke="#aaa" fill="none" />
					</g>
					<g id="eg-zwischentuer">
						<path d="M0,0 l84,0 A 84 84 0 0 1 0,84" stroke="#aaa" fill="none" />
					</g>
					<g id="eg-wohnzimmer-tuer">
						<path d="M0,0 l0,-78 A 78 78 0 0 0 -78,0" stroke="#aaa" fill="none" />
					</g>
					<g id="eg-wohnzimmer-fenster">
						<path d="M0,0 l126,0 M0,-30 l126,0" stroke="black" fill="none" />
						<path d="M0,-13 l126,0 M8,-17 l0,4 M0,-17 l126,0 m-8,0 l0,4" stroke="#777" fill="none" />
					</g>
					<g id="eg-kuechentuer">
						<path d="M0,-13 l149,0 M8,-17 l0,4 M49,-17 l0,4 M59,-17 l0,4 M0,-17 l149,0 m-8,0 l0,4 l 0,80 a 80 80 0 0 1 -80,-80" stroke="#777" fill="none" />
					</g>
					<g id="eg-rollenspiel-tuer">
						<path d="M0,0 l84,0 A 84 84 0 0 0 0,-84" stroke="#aaa" fill="none" />
					</g>
					<g id="eg-rollenspiel-fenster">
						<path d="M0,0 l237,0 M0,39 l237,0" stroke="black" fill="none" />
						<path d="M0,17 l237,0 M8,21 l0,-4 M0,21 l237,0 m-8,0 l0,-4 M113,17 l0,4 M123,17 l0,4" stroke="#777" fill="none" />
					</g>
					<g id="eg-flurfenster">
						<path d="M0,0 l202,0 M0,39 l202,0" stroke="black" fill="none" />
						<path d="M0,17 l202,0 M8,21 l0,-4 M0,21 l202,0 m-8,0 l0,-4 M65,17 l0,4 M73,17 l0,4 M129,17 l0,4 M137,17 l0,4" stroke="#777" fill="none" />
					</g>

					<g id="l_e01_1">
						<text x="5" y="15" font-size="10">L_E01_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_e02_1">
						<text x="5" y="15" font-size="10">L_E02_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_e03_1">
						<text x="5" y="15" font-size="10">L_E03_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_e04_1">
						<text x="5" y="15" font-size="10">L_E04_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_e04_2">
						<text x="-50" y="15" font-size="10">L_E04_2</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_e04_3">
						<text x="-50" y="15" font-size="10">L_E04_3</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_e05_1">
						<text x="5" y="15" font-size="10">L_E05_1</text>
						<use href="#lamp-off" />
					</g>
				</defs>
				<g id="eg" transform="translate(41 31)">
					<!-- Linker Teil Wohnzimmer -->
					<polygon points="-39,-30 170,-30 170,0 0,0 0,363 67,363 67,376 225,376 225,403 133,403 133,418 116,418 116,403 0,403 0,415 -39,415" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Rechter Teil Wohnzimmer, linker Teil Küche -->
					<polygon points="298,0 337,0 337,376 303,376 303,403 515,403 515,376 352,376 352,0 479,0 479,-30 298,-30" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Wand Küche/Rollenspiel -->
					<polygon points="600,403 700,403 700,426 728,426 728,0 1095,0 1095,627 975,627 975,666 1125,666 1125,-30 628,-30 628,0 700,0 700,361 640,361 640,376 600,376" fill="url(#diagonalHatch)" stroke="black" />
					
					<!-- Haustür bis WC-Fenster -->
					<polygon points="-39,513 0,513 0,525 35,525 35,540 0,540 0,550 -39,550" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Gäste-WC -->
					<polygon points="-39,570 0,570 0,627 116,627 116,540 103,540 103,525 116,525 116,502 133,502 133,627 153,627 153,666 -39,666" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Flur ab Fenster hinter Treppe -->
					<polygon points="356,627 700,627 700,510 728,510 728,627 738,627 738,666 356,666" fill="url(#diagonalHatch)" stroke="black" />

					<use href="#eg-stair" x="308" y="529" />
					<use href="#eg-haustuer" x="0" y="415" />
					<use href="#eg-wctuer" x="35" y="525" />
					<use href="#eg-zwischentuer" x="133" y="418" />
					<use href="#eg-wohnzimmer-tuer" x="303" y="376" />
					<use href="#eg-wohnzimmer-fenster" x="171" y="0" />
					<use href="#eg-kuechentuer" x="479" y="0" />
					<use href="#eg-rollenspiel-tuer" x="728" y="510" />
					<use href="#eg-rollenspiel-fenster" x="738" y="627" />
					<use href="#eg-flurfenster" x="154" y="627" />

					<use href="#l_e01_1" x="60" y="465" />
					<use href="#l_e01_1" x="190" y="465" />
					<use href="#l_e01_1" x="190" y="580" />
					<use href="#l_e01_1" x="300" y="465" />
					<use href="#l_e01_1" x="300" y="580" />
					<use href="#l_e01_1" x="410" y="465" />
					<use href="#l_e01_1" x="520" y="465" />
					<use href="#l_e01_1" x="630" y="465" />
					<use href="#l_e02_1" x="60" y="580" />
					<use href="#l_e03_1" x="168" y="180" />
					<use href="#l_e04_1" x="425" y="110" />
					<use href="#l_e04_2" x="692" y="50" />
					<use href="#l_e04_2" x="692" y="100" />
					<use href="#l_e04_2" x="692" y="150" />
					<use href="#l_e04_2" x="692" y="200" />
					<use href="#l_e04_2" x="692" y="330" />
					<use href="#l_e04_3" x="670" y="255" />
					<use href="#l_e04_3" x="670" y="280" />
					<use href="#l_e05_1" x="920" y="300" />
  			</g>
			</svg>
		</div>
		<div>
			<svg viewBox="0 0 1184 698">
  			<defs>
					<g id="og-badtuer">
						<path d="M0,0 l-72,0 A 72 72 0 0 0 0,72" stroke="#aaa" fill="none" />
					</g>
					<g id="og-schlafzimmertuer">
						<path d="M0,0 l0,-85 A 85 85 0 0 0 -85,0" stroke="#aaa" fill="none" />
					</g>
					<g id="og-kinderzimmertuer">
						<path d="M0,0 l85,0 A 85 85 0 0 0 0,-85" stroke="#aaa" fill="none" />
					</g>
					<g id="og-balkontuer">
						<path d="M0,0 l155,0 M0,30 l155,0" stroke="black" fill="none" />
						<path d="
							M0,13 l155,0 M0,17 l155,0
							M8,13 l0,4
							M78,13 l0,4
							M147,13 l0,4
							M147,17 l0,70
							A 70 70 0 0 1 78,17
							M8,17 l0,70
							A 70 70 0 0 0 78,17
							" stroke="#777" fill="none" />
					</g>
					<g id="og-schlafzimmerfenster">
						<path d="M0,0 l0,114 M39,0 l0,114" stroke="black" fill="none" />
						<path d="M17,0 l0,114 M21,0 l0,114 M17,8 l4,0 M17,106 l4,0" stroke="#777" fill="none" />
					</g>
					<g id="og-kinderzimmerfenster-giebel">
						<path d="M0,0 l0,117 M39,0 l0,117" stroke="black" fill="none" />
						<path d="M17,0 l0,117 M21,0 l0,117 M17,8 l4,0 M17,109 l4,0" stroke="#777" fill="none" />
					</g>
					<g id="og-kinderzimmerfenster-gaube">
						<path d="M0,0 l97,0 M0,60 l97,0" stroke="black" fill="none" />
						<path d="M0,27 l97,0 M0,31 l97,0 M8,27 l0,4 M89,27 l0,4" stroke="#777" fill="none" />
					</g>
					<g id="og-flurfenster">
						<path d="M0,0 l100,0 M0,37 l100,0" stroke="black" fill="none" />
						<path d="M0,17 l100,0 M0,21 l100,0 M8,17 l0,4 M92,17 l0,4" stroke="#777" fill="none" />
					</g>
					<g id="og-badfenster">
						<path d="M0,0 l92,0 M0,37 l92,0" stroke="black" fill="none" />
						<path d="M0,17 l92,0 M0,21 l92,0 M8,17 l0,4 M84,17 l0,4" stroke="#777" fill="none" />
					</g>

					<g id="l_o01_1" class="lamp">
						<text x="5" y="15" font-size="10">L_O01_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_o02_1" class="lamp">
						<text x="5" y="15" font-size="10">L_O02_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_o02_2" class="lamp">
						<text x="5" y="15" font-size="10">L_O02_2</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_o03_1" class="lamp">
						<text x="5" y="15" font-size="10">L_O03_1</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_o03_2" class="lamp">
						<text x="5" y="15" font-size="10">L_O03_2</text>
						<use href="#lamp-off" />
					</g>
					<g id="l_o04_1" class="lamp">
						<text x="5" y="15" font-size="10">L_O04_1</text>
						<use href="#lamp-off" />
					</g>
  			</defs>
				<g id="og" transform="translate(41 31)">
					<!-- Kinderzimmer unten rechts -->
					<polygon points="902,629 902,666 1141,666 1141,373 1102,373 1102,629" fill="url(#diagonalHatch)" stroke="black" />
					<!-- falscher Kniestock rechts v. Fenster -->
					<polygon points="902,629 902,606 1102,606 1102,629" fill="url(#diagonalHatch)" stroke="black" />
					<!-- falscher Kniestock links v. Fenster -->
					<polygon points="722,629 722,606 805,606 805,629" fill="url(#diagonalHatch)" stroke="black" />

					<!-- Wand Flur/Kinderzimmer -->
					<polygon points="582,666 582,629 708,629 708,509 722,509 722,629 805,629 805,666" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Wand Flur/Bad -->
					<polygon points="292,494 306,494 306,629 482,629 482,666 292,666" fill="url(#diagonalHatch)" stroke="black" />
					<!--Wand Schlafzimmer/Kinderzimmer -->
					<polygon points="631,0 708,0 708,368 650,368 650,394 585,394 585,408 708,408 708,424 722,424 722,0 1102,0 1102,256 1141,256 1141,-30 631,-30" fill="url(#diagonalHatch)" stroke="black" />
					<!-- falscher Kniestock Kinderzimmer ohne Fenster -->
					<polygon points="722,0 722,23 1102,23 1102,0" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Schlafzimmer oben links -->
					<polygon points="0,0 385,0 385,142 400,142 400,0 475,0 475,-30 -39,-30 -39,253 0,253" fill="url(#diagonalHatch)" stroke="black" />
					<!-- falscher Kniestock Schlafzimmer -->
					<polygon points="0,0 385,0 385,76 0,76" fill="url(#diagonalHatch)" stroke="black" />
					<!-- Schlafzimmer/Bad -->
					<polygon points="-39,367 79,367 79,394 500,394 500,408 306,408 306,422 292,422 292,408 0,408 0,629 199,629 199,666 -39,666" fill="url(#diagonalHatch)" stroke="black" />
					<!-- falscher Kniestock Bad -->
					<polygon points="0,603 199,603 199,629 0,629" fill="url(#diagonalHatch)" stroke="black" />

					<use href="#og-stair" x="399" y="530" />
					<use href="#og-badtuer" x="292" y="422" />
					<use href="#og-schlafzimmertuer" x="585" y="394" />
					<use href="#og-kinderzimmertuer" x="722" y="509" />

					<use href="#og-balkontuer" x="475" y="-30" />
					<use href="#og-schlafzimmerfenster" x="-39" y="253" />
					<use href="#og-kinderzimmerfenster-giebel" x="1102" y="256" />
					<use href="#og-kinderzimmerfenster-gaube" x="805" y="606" />
					<use href="#og-flurfenster" x="482" y="629" />
					<use href="#og-badfenster" x="199" y="629" />

					<use href="#l_o01_1" x="490" y="470" />
					<use href="#l_o02_1" x="170" y="520" />
					<use href="#l_o02_2" x="200" y="420" />
					<use href="#l_o02_2" x="120" y="420" />
					<use href="#l_o03_1" x="195" y="220" />
					<use href="#l_o03_2" x="560" y="190" />
					<use href="#l_o04_1" x="910" y="240" />
  			</g>
			</svg>
		</div>
	</body>
</html>
<!--
# vim: ts=2 sw=2
-->
