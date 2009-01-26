<?php
/**
 * @package Meta_Press_Spook
 * @author Doug Holland, borrowing from Matt Mullenweg's Hello Dolly plugin.
 * @version 1.0
 */
/*
Plugin Name: Meta-Press Spook
Plugin URI: http://meldroc.com/#
Description: By ingeniously stealing the code of the Hello Dolly plugin by Matt Mullenweg, I've created a diabolical way to increase the workload of NSA employees who are illegally conductiong warrantless surveillance of our Internet traffic.  Inspired by the Meta-X spook program that comes with Emacs.
Author: Doug Holland, stealing from Matt Mullenweg
Version: 1.0
Author URI: http://meldroc.com/
*/

/* Released under the GNU General Public License
	http://www.opensource.org/licenses/gpl-license.php
*/

function get_spook_text() {
	/** These were the lyrics to Hello Dolly, now they're spooky words... */
	$lyrics = "$400 million 
1 October 
15 May 
17 November 
3rd October 
ACLU 
ADF 
AES 
AIDS 
AIIB 
AK-47 
ALIR 
ANO 
ARD 
ARN 
ASALA 
ASG 
Abu Nidal 
Abu Sayyaf 
Aceh Merdeka 
Aden-Abyan 
Ahl-e-Hadees 
Air Force One 
Al-Fatah 
Al-`Asifa 
Al Qaeda
Alamo 
Albanian 
Alex Boncayao Brigade 
Alliance of Eritrean National Force 
Alliance pour la resistance democratique 
Allied Democratic Forces 
American 
American Airlines 
Amn Araissi 
Arab Revolutionary Brigades 
Arab Revolutionary Council 
Area 51 
Aum Shinrikyo 
Aum Supreme Truth 
Avtomat Kalasnikov 
BATF 
Babbar Khalsa 
Baghdad 
Barack Obama's Blackberry
Berlin 
Bhinderanwala Tiger Force 
Black September 
Brigate Rosse 
Bush crimes
CIA 
CIRA 
CNDD 
CNRM 
CNRT 
Catholic Reaction Force 
Cheney an accessory
China 
Chukaku-Ha 
Clinton 
Cocaine 
Communist 
Conseil 
Cuba 
DES 
DFLP 
DNA 
Dal Khalsa 
Dayak 
Delta Airlines 
Delta Force 
Dev Sol 
Devrimci Sol 
EFF 
ELF-RC 
ESSA 
EZLN 
Eastern Shan State Army 
Eiffel Tower 
Ejercito Popular Boricua 
Ejercito Popular Revolucionario 
Ellalan Force 
Eritrean 
Euzkadi Ta Askatasuna 
FALINA 
FALINTIL 
FALN 
FBI 
FMLN 
FRETILIN 
FROLINA 
FSF 
Farabundo Marti 
Fatah 
Force 17 
Free Aceh 
Ft. Bragg 
Ft. Meade 
GIA 
GRAPO 
George Bush 
George W Bush 
Gerakin Aceh Merdeka 
Grey Wolves 
HAMAS 
Harakat ul-Ansar 
Hawari 
Hitler 
Hizb-i Wahdat 
Hizb-i-Islami 
Hizb-ul-Mujahideen 
Hizballah 
Hizbullah 
Honduras 
ICBM 
IRA 
Ikhwan-ul-Mussalmin 
Interahamwe 
Iparretarrak 
Islamic 
Israel 
JKLF 
Jamaat ul-Fuqra 
Jamat-e-Islami 
Jamiat-e-Ahl-e-Hadees 
KGB 
KKK 
Kach 
Kahane Chai 
Kashmir 
Kennedy 
Khaddafi 
Khalistan 
Khamenei
Khmer Rouge 
Komala 
Kosovo 
Kurdish 
Kurdistan 
Kuwait 
LSD 
LTTE 
La Cosa Nostra 
Lakshar-e-Taiba 
Lautaro 
Legion of Doom 
Lenin 
Les mongoles 
MAPU/L 
MD5 
MI6 
MILF 
MNLF 
Macheteros 
Macheteros 
Mafia 
Maktab al-Khidamat 
Manuel Rodriguez 
Marxist 
Maubere Resistance 
Mayi-Mayi 
Middle-Core 
Mohajir Qaumi 
Mong Tai 
Morazanist 
Mossad 
Mothaidda Quami 
Mujahedin-e Khalq 
Myanmar 
New York Times
NORAD 
NSA 
Navy 
Nazi 
Nellis Range 
Noriega 
North Korea 
Oklahoma City 
Ortega 
Osama Bin Laden 
PALIPEHUTU 
PCP 
PGP 
PLO 
Pakistan 
Panama 
Pearl Harbor 
Peking 
Provos 
Qaddafi 
RC5 
RDX 
RENAMO 
RSA 
Reno 
Romania 
Rule Psix 
Rumsfeld
Russell Tice
SCUBA 
SDI 
SEAL Team 6 
SHA 
SWAT 
Saddam Hussein 
Saheed Khalsa 
Scientology 
Scooter Libby
Semtex 
Serbian 
Shora-e-Jehad 
Sivi Vukovi 
South Africa 
Soviet  
Steyr 
Students of the Engineer 
TEMPEST 
TNT 
Tal Al Za'atar 
Talaa' al-Fateh 
Tamil Eelam 
Teamsters 
Terra Lliure 
Treasury 
Tupac Amaru 
U-235 
US Airways 
Uzi 
Valerie Plame
Van Eck phreaking
Waco 
White House 
World Trade Center 
Zapatistas 
airframe 
airport 
al-Gama'at al-Islamiyya 
al-Jihad 
al-Qa'ida 
algorithm 
amatol 
ambush 
ambush 
ammo 
ammunition 
anonymous 
anonymous source
anti-tank 
archives 
armada 
armor 
armor-piercing 
arms 
arrangements 
assassinate 
assassination 
assassination 
assault 
atomic bomb 
bank account 
biological 
blowfish 
bomb 
bomb 
boobytrap 
border 
c4 
camera 
carnivore 
charcoal 
chemical 
child pornography 
chinese 
class struggle 
claymore 
cocaine 
codebook 
colonel 
commando 
composition b 
conspiracy 
constitution 
cordite 
corporate 
corrupt 
council 
counter-intelligence 
crack-cocaine 
cracking 
cray 
credit card 
cryptographic 
czar 
d-day 
data haven 
defcon 
defenses 
democratie 
detcord 
detonate 
detonators 
dictionary 
disruption 
divers 
doctrine 
documents
domestic 
doomsday 
double agent 
e-bola 
echelon 
efnet 
embassy 
embassy 
embassy 
empire 
encrypt 
enigma 
evidence
explosion 
explosive 
faction 
federal agency
fertilizer 
fissionable 
flight 800 
freedom 
freemasons 
genetic 
gold bullion 
government 
grenades 
guns 
hack 
harbor 
heroin 
hijack 
hostage 
hostages 
hydrogen bomb 
illuminati 
impulse 
incendiaries 
infiltration 
infosec 
infrastructure 
initiators 
insurgent 
intel 
international 
internet worm 
interpol 
jihad 
journalists' privilege
kamikazi 
kampuchea 
kibo 
kill 
kill 
kill 
kill 
launch codes 
lead azide 
lead styphante 
liberate 
liberation 
limousine 
lockpick 
loyalist 
main charge 
marijuana 
martyr 
maverick 
meeting tonight
mercury fulminate 
microfiche 
microfilm 
minefield 
mines 
motorcade 
motorola 
mouvement 
munitions 
napalm 
nationalist 
nitric acid 
nitrocellulose 
nuclear 
oppressed 
orthodox 
parking garage
password 
picric acid 
pipe-bomb 
plague 
platter charge 
plutonium 
plutonium 
policy 
political 
pre-teen 
president 
president 
primers 
private key 
promised anonymity
propaganda 
psyops 
public key 
publishing tomorrow
pulse detonation engine 
quantum computer
qubit
radar 
rail gun 
rebel 
remailer 
resistance 
revolucionario 
rijndael 
robotic 
rockets 
root-servers.net 
rubella 
salt peter 
sanctions 
satelliate 
satellite 
satellite phone 
secret 
secret key 
secret service 
secure 
security 
sequence 
shaped charge 
smallpox 
smuggle 
sniper 
sniper 
socialist 
space station 
spy 
steganography 
strategic 
submarine 
subpoena
subsonic 
suicide 
suicide bombing 
sulfur 
supercomputer 
supersonic 
surveillance 
teflon bullets 
terminate 
terrorist 
theater missile defense 
thermite 
timers 
treason
tunneling 
undercover 
undernet 
uranium 
virus 
warfare 
warrant 
weapons 
white noise generator 
whistleblower
wiretap 
zenith 
";

	// Here we split it into lines
	$lyrics = explode("\n", $lyrics);

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand(0, count($lyrics) - 1) ] );
}

// This just echoes the chosen line, we'll position it later
function spook_widget() {
	$spookfodder = "";
	for($i=0; $i<15; $i++) {
		$spookword = get_spook_text();
		$spookfodder = "$spookfodder $spookword";
	}
	echo "<h2>Hello to our NSA friends!</h2>$spookfodder";
}

// Now we set that function up to execute when the admin_footer action is called
//add_action('admin_footer', 'hello_dolly');

// We need some CSS to position the paragraph
//function dolly_css() {
//	echo "
//	<style type='text/css'>
//	#dolly {
//		position: absolute;
//		top: 4.5em;
//		margin: 0;
//		padding: 0;
//		right: 215px;
//		font-size: 11px;
//	}
//	</style>
//	";
//}

function init_spook() {
	register_sidebar_widget("Meta-Press Spook", spook_widget);
}

add_action("plugins_loaded", "init_spook");

?>
