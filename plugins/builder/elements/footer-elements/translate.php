<!-- #todo translate not working due to duplicate ID's  -->
<div id="google-translate-wrap" class="footer-element footer-dropdown dropdown relative d-flex align-items-stretch gap-0">
	<div class="vr vr-s"></div>
	<button class="translate-button btn btn-link relative px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		<i class="bi bi-translate me-2"></i><span>Translate</span>
	</button>
		<button id="translate-reset" translate="no">
		<i class="fa-solid fa-power-off"></i>
	</button>
	<div id="google-translate" class="d-none">
		<script>
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pagelanguage: 'en',
					layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
					'google-translate');
			}
		</script>
	</div><!--/#google-translate-->

		<ul id="translation-links" class="dropdown-menu" aria-labelledby="translate-button" role="menu">
			<li><h6 class="dropdown-header">Translate</h6></li>
			<li><a href="#" class="dropdown-item English d-flex" data-lang="English" translate="no"><strong>English</strong><span class="badge rounded-pill text-bg-info ms-auto align-self-center">Default</span></a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a href="#" class="dropdown-item Afrikaans" data-lang="Afrikaans">Afrikaans</a></li>
			<li><a href="#" class="dropdown-item Albanian" data-lang="Albanian">Albanian</a></li>
			<li><a href="#" class="dropdown-item Arabic" data-lang="Arabic">Arabic</a></li>
			<li><a href="#" class="dropdown-item Armenian" data-lang="Armenian">Armenian</a></li>
			<li><a href="#" class="dropdown-item Azerbaijani" data-lang="Azerbaijani">Azerbaijani</a></li>
			<li><a href="#" class="dropdown-item Basque" data-lang="Basque">Basque</a></li>
			<li><a href="#" class="dropdown-item Belarusian" data-lang="Belarusian">Belarusian</a></li>
			<li><a href="#" class="dropdown-item Bengali" data-lang="Bengali">Bengali</a></li>
			<li><a href="#" class="dropdown-item Bosnian" data-lang="Bosnian">Bosnian</a></li>
			<li><a href="#" class="dropdown-item Bulgarian" data-lang="Bulgarian">Bulgarian</a></li>
			<li><a href="#" class="dropdown-item Catalan" data-lang="Catalan">Catalan</a></li>
			<li><a href="#" class="dropdown-item Cebuano" data-lang="Cebuano">Cebuano</a></li>
			<li><a href="#" class="dropdown-item Chinese" data-lang="Chinese (Simplified)">Chinese (Simplified)</a></li>
			<li><a href="#" class="dropdown-item Chinese" data-lang="Chinese (Traditional)">Chinese (Traditional)</a></li>
			<li><a href="#" class="dropdown-item Croatian" data-lang="Croatian">Croatian</a></li>
			<li><a href="#" class="dropdown-item Czech" data-lang="Czech">Czech</a></li>
			<li><a href="#" class="dropdown-item Danish" data-lang="Danish">Danish</a></li>
			<li><a href="#" class="dropdown-item Dutch" data-lang="Dutch">Dutch</a></li>
			<li><a href="#" class="dropdown-item Esperanto" data-lang="Esperanto">Esperanto</a></li>
			<li><a href="#" class="dropdown-item Estonian" data-lang="Estonian">Estonian</a></li>
			<li><a href="#" class="dropdown-item Filipino" data-lang="Filipino">Filipino</a></li>
			<li><a href="#" class="dropdown-item Finnish" data-lang="Finnish">Finnish</a></li>
			<li><a href="#" class="dropdown-item French" data-lang="French">French</a></li>
			<li><a href="#" class="dropdown-item Galician" data-lang="Galician">Galician</a></li>
			<li><a href="#" class="dropdown-item Georgian" data-lang="Georgian">Georgian</a></li>
			<li><a href="#" class="dropdown-item German" data-lang="German">German</a></li>
			<li><a href="#" class="dropdown-item Greek" data-lang="Greek">Greek</a></li>
			<li><a href="#" class="dropdown-item Gujarati" data-lang="Gujarati">Gujarati</a></li>
			<li><a href="#" class="dropdown-item Haitian Creole" data-lang="Haitian Creole">Haitian Creole</a></li>
			<li><a href="#" class="dropdown-item Hausa" data-lang="Hausa">Hausa</a></li>
			<li><a href="#" class="dropdown-item Hebrew" data-lang="Hebrew">Hebrew</a></li>
			<li><a href="#" class="dropdown-item Hindi" data-lang="">Hindi</a></li>
			<li><a href="#" class="dropdown-item Hmong" data-lang="Hmong">Hmong</a></li>
			<li><a href="#" class="dropdown-item Hungarian" data-lang="Hungarian">Hungarian</a></li>
			<li><a href="#" class="dropdown-item Icelandic" data-lang="Icelandic">Icelandic</a></li>
			<li><a href="#" class="dropdown-item Igbo" data-lang="Igbo">Igbo</a></li>
			<li><a href="#" class="dropdown-item Indonesian" data-lang="Indonesian">Indonesian</a></li>
			<li><a href="#" class="dropdown-item Irish" data-lang="Irish">Irish</a></li>
			<li><a href="#" class="dropdown-item Italian" data-lang="Italian">Italian</a></li>
			<li><a href="#" class="dropdown-item Japanese" data-lang="Japanese">Japanese</a></li>
			<li><a href="#" class="dropdown-item Javanese" data-lang="Javanese">Javanese</a></li>
			<li><a href="#" class="dropdown-item Kannada" data-lang="Kannada">Kannada</a></li>
			<li><a href="#" class="dropdown-item Khmer" data-lang="Khmer">Khmer</a></li>
			<li><a href="#" class="dropdown-item Korean" data-lang="Korean">Korean</a></li>
			<li><a href="#" class="dropdown-item Lao" data-lang="Lao">Lao</a></li>
			<li><a href="#" class="dropdown-item Latin" data-lang="Latin">Latin</a></li>
			<li><a href="#" class="dropdown-item Latvian" data-lang="Latvian">Latvian</a></li>
			<li><a href="#" class="dropdown-item Lithuanian" data-lang="Lithuanian">Lithuanian</a></li>
			<li><a href="#" class="dropdown-item Macedonian" data-lang="Macedonian">Macedonian</a></li>
			<li><a href="#" class="dropdown-item Malay" data-lang="Malay">Malay</a></li>
			<li><a href="#" class="dropdown-item Maltese" data-lang="Maltese">Maltese</a></li>
			<li><a href="#" class="dropdown-item Maori" data-lang="Maori">Maori</a></li>
			<li><a href="#" class="dropdown-item Marathi" data-lang="Marathi">Marathi</a></li>
			<li><a href="#" class="dropdown-item Mongolian" data-lang="Mongolian">Mongolian</a></li>
			<li><a href="#" class="dropdown-item Nepali" data-lang="Nepali">Nepali</a></li>
			<li><a href="#" class="dropdown-item Norwegian" data-lang="Norwegian">Norwegian</a></li>
			<li><a href="#" class="dropdown-item Persian" data-lang="Persian">Persian</a></li>
			<li><a href="#" class="dropdown-item Polish" data-lang="Polish">Polish</a></li>
			<li><a href="#" class="dropdown-item Portuguese" data-lang="Portuguese">Portuguese</a></li>
			<li><a href="#" class="dropdown-item Punjabi" data-lang="Punjabi">Punjabi</a></li>
			<li><a href="#" class="dropdown-item Romanian" data-lang="Romanian">Romanian</a></li>
			<li><a href="#" class="dropdown-item Russian" data-lang="Russian">Russian</a></li>
			<li><a href="#" class="dropdown-item Serbian" data-lang="Serbian">Serbian</a></li>
			<li><a href="#" class="dropdown-item Slovak" data-lang="Slovak">Slovak</a></li>
			<li><a href="#" class="dropdown-item Slovenian" data-lang="Slovenian">Slovenian</a></li>
			<li><a href="#" class="dropdown-item Somali" data-lang="Somali">Somali</a></li>
			<li><a href="#" class="dropdown-item Spanish" data-lang="Spanish">Spanish</a></li>
			<li><a href="#" class="dropdown-item Swahili" data-lang="Swahili">Swahili</a></li>
			<li><a href="#" class="dropdown-item Swedish" data-lang="Swedish">Swedish</a></li>
			<li><a href="#" class="dropdown-item Tamil" data-lang="Tamil">Tamil</a></li>
			<li><a href="#" class="dropdown-item Telugu" data-lang="Telugu">Telugu</a></li>
			<li><a href="#" class="dropdown-item Thai" data-lang="Thai">Thai</a></li>
			<li><a href="#" class="dropdown-item Turkish" data-lang="Turkish">Turkish</a></li>
			<li><a href="#" class="dropdown-item Ukrainian" data-lang="Ukrainian">Ukrainian</a></li>
			<li><a href="#" class="dropdown-item Urdu" data-lang="Urdu">Urdu</a></li>
			<li><a href="#" class="dropdown-item Vietnamese" data-lang="Vietnamese">Vietnamese</a></li>
			<li><a href="#" class="dropdown-item Welsh" data-lang="Welsh">Welsh</a></li>
			<li><a href="#" class="dropdown-item Yiddish" data-lang="Yiddish">Yiddish</a></li>
			<li><a href="#" class="dropdown-item Yoruba" data-lang="Yoruba">Yoruba</a></li>
			<li><a href="#" class="dropdown-item Zulu" data-lang="Zulu">Zulu</a></li>
		</ul>
 	<div class="vr vr-e"></div>		
</div><!-- /.footer-element -->