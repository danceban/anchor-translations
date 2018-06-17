<?php

return array(

	'extend' => 'Extinde funcționalul',

	'fields' => 'Câmpuri customizate',
	'fields_desc' => 'Crează câmpuri customizate adiționale',

	'pagetypes' => 'Tipuri de pagini',
	'pagetypes_desc' => 'Crează tipuri de pagini adiționale',

	'variables' => 'Variabilele site-ului',
	'variables_desc' => 'Crează câmpuri metadata adiționale',

	'create_field' => 'Crează un câmp nou',
	'editing_custom_field' => 'Editează câmpul &ldquo;%s&rdquo;',
	'nofields_desc' => 'Nu există câmpuri adiționale',

	'create_variable' => 'Crează o variabilă nouă',
	'editing_variable' => 'Editează variabila &ldquo;%s&rdquo;',
	'novars_desc' => 'Nu există variabile noi',

	'create_pagetype' => 'Crează un nou tip de pagină',
	'editing_pagetype' => 'Editează tipul de pagină &ldquo;%s&rdquo;',

	// form fields
	'type' => 'Tipul câmpului',
	'type_explain' => 'Tipul conținutului pe care doriți să îl adăugați în acest câmp.',
	'notypes_desc' => 'Nu există tipuri de pagină',

	'pagetype' => 'Tipul de pagină',
	'pagetype_explain' => 'Tipul paginii pentru care doriți să adăugați acest câmp.',

	'field' => 'Câmpuri',
	'field_explain' => 'Câmp pentru adăugare cod Html',

	'key' => 'Cheie unică',
	'key_explain' => 'Cheia unică pentru câmpul dorit',
	'key_missing' => 'Introduceți cheia unică',
	'key_exists' => 'Această cheie este deja utilizată',

	'label' => 'Denumire',
	'label_explain' => 'O denumire semantică pentru câmpul dat',
	'label_missing' => 'Introduceți o denumire câmpului',

	'attribute_type' => 'Tipuri de files',
	'attribute_type_explain' => 'Lista tipurilor de files separate prin virgulă. În cazul neîndeplinirii vor fi acceptate toate tipurile.',

	// images
	'attributes_size_width' => 'Lățimea maximă a imaginilor',
	'attributes_size_width_explain' => 'Imaginile vor fi redimensionate dacă vor fi mai mari decât lățimea maximă indicată.',

	'attributes_size_height' => 'Înălțimea maximă a imaginilor',
	'attributes_size_height_explain' => 'Imaginile vor fi redimensionate dacă vor fi mai mari decât înălțimea maximă indicată.',

	// custom vars
	'name' => 'Nume',
	'name_explain' => 'Introduceți un nume unic',
	'name_missing' => 'Introduceți un nume unic în acest câmp',
	'name_exists' => 'Acest nume este deja utilizat',

	'value' => 'Valoare',
	'value_explain' => 'Datele pe care doriți să le stocați (până la 64kb)',
	'value_code_snipet' => 'Codul adăugat la template-ul Dvs:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Variabila a fost creată cu succes',
	'variable_updated' => 'Variabila a fost actualizată cu succes',
	'variable_deleted' => 'Variabila a fost ștearsă',

	'pagetype_created' => 'Tipul de pagină a fost creat cu succes',
	'pagetype_updated' => 'Tipul de pagină a fost actualizat cu succes',
	'pagetype_deleted' => 'Tipul de pagină a fost șters',

	'field_created' => 'Câmpul customizat a fost creat cu succes',
	'field_updated' => 'Câmpul customizat a fost actualizat cu succes',
	'field_deleted' => 'Câmpul customizat a fost șters'

);
