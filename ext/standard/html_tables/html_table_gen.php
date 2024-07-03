#!/usr/bin/env php
<?php
/*
   +----------------------------------------------------------------------+
   | Copyright (c) The PHP Group                                          |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | https://www.php.net/license/3_01.txt                                 |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Authors: Gustavo Lopes  <cataphract@php.net>                         |
   +----------------------------------------------------------------------+
*/

/* This file prints to stdout the contents of ext/standard/html_tables.h */
/* put together with glue; have patience */

$t = <<<CODE
/*
   +----------------------------------------------------------------------+
   | Copyright (c) The PHP Group                                          |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | https://www.php.net/license/3_01.txt                                 |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#ifndef HTML_TABLES_H
#define HTML_TABLES_H

/**************************************************************************
***************************************************************************
**        THIS FILE IS AUTOMATICALLY GENERATED. DO NOT MODIFY IT.        **
***************************************************************************
** Please change html_tables/html_table_gen.php instead and then         **
** run it in order to generate this file                                 **
***************************************************************************
**************************************************************************/

enum entity_charset { cs_utf_8, cs_8859_1, cs_cp1252, cs_8859_15, cs_cp1251,
					  cs_8859_5, cs_cp866, cs_macroman, cs_koi8r, cs_big5,
					  cs_gb2312, cs_big5hkscs, cs_sjis, cs_eucjp,
					  cs_numelems /* used to count the number of charsets */
					};
#define CHARSET_UNICODE_COMPAT(cs)	((cs) <= cs_8859_1)
#define CHARSET_SINGLE_BYTE(cs)		((cs) > cs_utf_8 && (cs) < cs_big5)
#define CHARSET_PARTIAL_SUPPORT(cs)	((cs) >= cs_big5)

static const struct {
	const char *codeset;
	uint32_t codeset_len;
	enum entity_charset charset;
} charset_map[] = {
	{ "ISO-8859-1",		sizeof("ISO-8859-1")-1,		cs_8859_1 },
	{ "ISO8859-1",		sizeof("ISO8859-1")-1,		cs_8859_1 },
	{ "ISO-8859-15",	sizeof("ISO-8859-15")-1,	cs_8859_15 },
	{ "ISO8859-15",		sizeof("ISO8859-15")-1,		cs_8859_15 },
	{ "utf-8",			sizeof("utf-8")-1,			cs_utf_8 },
	{ "cp1252", 		sizeof("cp1252")-1, 		cs_cp1252 },
	{ "Windows-1252",	sizeof("Windows-1252")-1,	cs_cp1252 },
	{ "1252",			sizeof("1252")-1,			cs_cp1252 },
	{ "BIG5",			sizeof("BIG5")-1,			cs_big5 },
	{ "950",			sizeof("950")-1,			cs_big5 },
	{ "GB2312",			sizeof("GB2312")-1,			cs_gb2312 },
	{ "936",			sizeof("936")-1,			cs_gb2312 },
	{ "BIG5-HKSCS",		sizeof("BIG5-HKSCS")-1,		cs_big5hkscs },
	{ "Shift_JIS",		sizeof("Shift_JIS")-1,		cs_sjis },
	{ "SJIS",			sizeof("SJIS")-1,			cs_sjis },
	{ "932",			sizeof("932")-1,			cs_sjis },
	{ "SJIS-win",		sizeof("SJIS-win")-1,		cs_sjis },
	{ "CP932",			sizeof("CP932")-1,			cs_sjis },
	{ "EUCJP",			sizeof("EUCJP")-1,			cs_eucjp },
	{ "EUC-JP",			sizeof("EUC-JP")-1,			cs_eucjp },
	{ "eucJP-win",		sizeof("eucJP-win")-1,		cs_eucjp },
	{ "KOI8-R",			sizeof("KOI8-R")-1,			cs_koi8r },
	{ "koi8-ru",		sizeof("koi8-ru")-1,		cs_koi8r },
	{ "koi8r",			sizeof("koi8r")-1,			cs_koi8r },
	{ "cp1251",			sizeof("cp1251")-1,			cs_cp1251 },
	{ "Windows-1251",	sizeof("Windows-1251")-1,	cs_cp1251 },
	{ "win-1251",		sizeof("win-1251")-1,		cs_cp1251 },
	{ "iso8859-5",		sizeof("iso8859-5")-1,		cs_8859_5 },
	{ "iso-8859-5",		sizeof("iso-8859-5")-1,		cs_8859_5 },
	{ "cp866",			sizeof("cp866")-1,			cs_cp866 },
	{ "866",			sizeof("866")-1,			cs_cp866 },
	{ "ibm866",			sizeof("ibm866")-1,			cs_cp866 },
	{ "MacRoman",		sizeof("MacRoman")-1,		cs_macroman }
};

/* longest entity name length excluding & and ; */
#define LONGEST_ENTITY_LENGTH 31

/* Definitions for mappings *to* Unicode.
 * The origin charset must have at most 256 code points.
 * The multi-byte encodings are not supported */
typedef struct {
    unsigned short uni_cp[64];
} enc_to_uni_stage2;

typedef struct {
    const enc_to_uni_stage2 *inner[4];
} enc_to_uni;

/* bits 7-8 bits (only single bytes encodings supported )*/
#define ENT_ENC_TO_UNI_STAGE1(k) ((k & 0xC0) >> 6)
/* bits 1-6 */
#define ENT_ENC_TO_UNI_STAGE2(k) ((k) & 0x3F)


CODE;

echo $t;

$encodings = array(
    array(
        "ident" => "iso88591",
        "enumid" => 1,
        "name" => "ISO-8859-1",
        "file" => "mappings/8859-1.TXT",
    ),
    array(
        "ident" => "iso88595",
        "enumid" => 5,
        "name" => "ISO-8859-5",
        "file" => "mappings/8859-5.TXT",
    ),
    array(
        "ident" => "iso885915",
        "enumid" => 3,
        "name" => "ISO-8859-15",
        "file" => "mappings/8859-15.TXT",
    ),
    array(
        "ident" => "win1252",
        "enumid" => 2,
        "enumident" => "cp1252",
        "name" => "Windows-1252",
        "file" => "mappings/CP1252.TXT",
    ),
    array(
        "ident" => "win1251",
        "enumid" => 4,
        "enumident" => "cp1252",
        "name" => "Windows-1251",
        "file" => "mappings/CP1251.TXT",
    ),
    array(
        "ident" => "koi8r",
        "enumid" => 8,
        "name" => "KOI8-R",
        "file" => "mappings/KOI8-R.TXT",
    ),
    array(
        "ident" => "cp866",
        "enumid" => 6,
        "name" => "CP-866",
        "file" => "mappings/CP866.TXT",
    ),
    array(
        "ident" => "macroman",
        "enumid" => 7,
        "name" => "MacRoman",
        "file" => "mappings/ROMAN.TXT",
    ),
);

$prevStage2 = array();

foreach ($encodings as $e) {
    echo
"/* {{{ Mappings *to* Unicode for {$e['name']} */\n\n";

    /* process file */
    $map = array();
    $lines = explode("\n", file_get_contents($e{'file'}));
    foreach ($lines as $l) {
        if (preg_match("/^0x([0-9A-Z]{2})\t0x([0-9A-Z]{2,})/i", $l, $matches)) {
            $map[] = array($matches[1], $matches[2]);
        }
    }

    $mappy = array();
    foreach ($map as $v) {
        $mappy[hexdec($v[0])] = hexdec($v[1]);
    }

    $mstable = array("ident" => $e['ident']);
    /* calculate two-stage tables */
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 64; $j++) {
            $cp = $i << 6 | $j;
            $mstable[$i][$j] = isset($mappy[$cp]) ? $mappy[$cp] : null;
        }
    }

    echo
"/* {{{ Stage 2 tables for {$e['name']} */\n\n";

    $s2tables_idents = array();
    for ($i = 0; $i < 4; $i++) {
        if (($t = array_keys($prevStage2, $mstable[$i])) !== array()) {
            $s2tables_idents[$i] = $encodings[$t[0] / 5]["ident"];
            continue;
        }

        $s2tables_idents[$i] = $e["ident"];

        echo "static const enc_to_uni_stage2 enc_to_uni_s2_{$e['ident']}_".
            sprintf("%02X", $i << 6)." = { {\n";
        for ($j = 0; $j < 64; $j++) {
            if ($j == 0) {
                echo "\t";
            } elseif ($j % 6 == 0) {
                echo "\n\t";
            } else {
                echo " ";
            }
            if ($mstable[$i][$j] !== null) {
                echo sprintf("0x%04X,", $mstable[$i][$j]);
            } else {
                echo "0xFFFF,";
            } /* special value; indicates no mapping */
        }
        echo "\n} };\n\n";

        $prevStage2[] = $mstable[$i];
    }

    echo
"/* end of stage 2 tables for {$e['name']} }}} */\n\n";

    echo
"/* {{{ Stage 1 table for {$e['name']} */\n";

    echo
"static const enc_to_uni enc_to_uni_{$e['ident']} = { {
\t&enc_to_uni_s2_{$s2tables_idents[0]}_00,
\t&enc_to_uni_s2_{$s2tables_idents[1]}_40,
\t&enc_to_uni_s2_{$s2tables_idents[2]}_80,
\t&enc_to_uni_s2_{$s2tables_idents[3]}_C0 }
};
";

    echo
"/* end of stage 1 table for {$e['name']} }}} */\n\n";
}

$maxencnum = max(array_map(function ($e) { return $e['enumid']; }, $encodings));
$a = range(0, $maxencnum);
foreach ($encodings as $e) {
    $a[$e['enumid']] = $e['ident'];
}

echo
"/* {{{ Index of tables for encoding conversion */
static const enc_to_uni *const enc_to_uni_index[cs_numelems] = {\n";

foreach ($a as $k => $v) {
    if (is_numeric($v)) {
        echo "\tNULL,\n";
    } else {
        echo "\t&enc_to_uni_$v,\n";
    }
}

echo
"};
/* }}} */\n";

$t = <<<CODE

/* Definitions for mappings *from* Unicode */

typedef struct {
	unsigned short un_code_point; /* we don't need bigger */
	unsigned char cs_code; /* currently, we only have maps to single-byte encodings */
} uni_to_enc;


CODE;

echo $t;

$encodings = array(
    array(
        "ident" => "iso885915",
        "name" => "ISO-8859-15",
        "file" => "mappings/8859-15.TXT",
        "range" => array(0xA4, 0xBE),
    ),
    array(
        "ident" => "win1252",
        "name" => "Windows-1252",
        "file" => "mappings/CP1252.TXT",
        "range" => array(0x80, 0x9F),
    ),
    array(
        "ident" => "win1251",
        "name" => "Windows-1251",
        "file" => "mappings/CP1251.TXT",
        "range" => array(0x80, 0xFF),
    ),
    array(
        "ident" => "koi8r",
        "name" => "KOI8-R",
        "file" => "mappings/KOI8-R.TXT",
        "range" => array(0x80, 0xFF),
    ),
    array(
        "ident" => "cp866",
        "name" => "CP-866",
        "file" => "mappings/CP866.TXT",
        "range" => array(0x80, 0xFF),
    ),
    array(
        "ident" => "macroman",
        "name" => "MacRoman",
        "file" => "mappings/ROMAN.TXT",
        "range" => array(0x80, 0xFF),
    ),
);

foreach ($encodings as $e) {
    echo
"/* {{{ Mappings *from* Unicode for {$e['name']} */\n";

    /* process file */
    $map = array();
    $lines = explode("\n", file_get_contents($e{'file'}));
    foreach ($lines as $l) {
        if (preg_match("/^0x([0-9A-Z]{2})\t0x([0-9A-Z]{2,})\s+#\s*(.*)$/i", $l, $matches)) {
            $map[] = array($matches[1], $matches[2], rtrim($matches[3]));
        }
    }

    $mappy = array();
    foreach ($map as $v) {
        if (hexdec($v[0]) >= $e['range'][0] && hexdec($v[0]) <= $e['range'][1]) {
            $mappy[hexdec($v[1])] = array(hexdec($v[0]), strtolower($v[2]));
        }
    }
    ksort($mappy);

    echo
"static const uni_to_enc unimap_{$e['ident']}[] = {\n";

    foreach ($mappy as $k => $v) {
        echo "\t{ ", sprintf("0x%04X", $k), ", ", sprintf("0x%02X", $v[0]), " },\t/* ",
        $v[1], " */\n";
    }
    echo "};\n";

    echo
"/* {{{ end of mappings *from* Unicode for {$e['name']} */\n\n";
}

$data = file_get_contents("ents_html5.txt");
$pass2 = false;
$name = "HTML5";
$ident = "html5";
again:

$t = <<<'CODE'
/* HTML 5 has many more named entities.
 * Some of them map to two unicode code points, not one.
 * We're going to use a three-stage table (with an extra one for the entities
 * with two code points). */

#define ENT_STAGE1_INDEX(k) (((k) & 0xFFF000) >> 12) /* > 1D, we have no mapping */
#define ENT_STAGE2_INDEX(k) (((k) & 0xFC0) >> 6)
#define ENT_STAGE3_INDEX(k) ((k) & 0x3F)
#define ENT_CODE_POINT_FROM_STAGES(i,j,k) (((i) << 12) | ((j) << 6) | (k))

/* The default entity may be NULL. Binary search is still possible while
   is senseless as there are just two rows (see also find_entity_for_char()). */
typedef union {
	struct {
		const char *default_entity;
		unsigned size; /* number of remaining entries in the table */
		unsigned short default_entity_len;
	} leading_entry;
	struct {
		const char *entity;
		unsigned second_cp; /* second code point */
		unsigned short entity_len;
	} normal_entry;
} entity_multicodepoint_row;

/* blocks of these should start at code points k where k % 0xFC0 == 0 */
typedef struct {
	char ambiguous; /* if 0 look into entity */
	union {
		struct {
			const char *entity; /* may be NULL */
			unsigned short entity_len;
		} ent;
		const entity_multicodepoint_row *multicodepoint_table;
	} data;
} entity_stage3_row;

/* Calculate k & 0x3F Use as offset */
typedef const entity_stage3_row *entity_stage2_row; /* 64 elements */

/* Calculate k & 0xFC0 >> 6. Use as offset */
typedef const entity_stage3_row *const *entity_stage1_row; /* 64 elements */

/* For stage 1, Calculate k & 0xFFF000 >> 3*4.
 * If larger than 1D, we have no mapping. Otherwise lookup that index */

typedef struct {
	const entity_stage1_row *ms_table;
	/* for tables with only basic entities, this member is to be accessed
	 * directly for better performance: */
	const entity_stage3_row *table;
} entity_table_opt;

/* Replaced "GT" > "gt" and "QUOT" > "quot" for consistency's sake. */


CODE;

if (!$pass2) {
    echo $t;
}

$dp = array();

foreach (explode("\n", $data) as $l) {
    if (preg_match('/^(#?[a-z0-9]+)\s+([a-f0-9]+) ([a-f0-9]+)/i', $l, $matches)) {
        //echo sprintf("\t{\"%-21s 1, 0x%05d},\n", $matches[1].",", $matches[2]);
        $dp[] = array($matches[1], $matches[2], $matches[3]);
    } elseif (preg_match('/^(#?[a-z0-9]+)\s+([a-f0-9]+)/i', $l, $matches)) {
        $dp[] = array($matches[1], $matches[2]);
    }
}

$origdp = $dp;

usort($dp, function ($a, $b) { return hexdec($a[1]) - hexdec($b[1]); });

$multicp_rows = array();
foreach ($dp as $el) {
    if (count($el) == 3) {
        $multicp_rows[$el[1]] = array();
    }
}

foreach ($dp as $el) {
    if (key_exists($el[1], $multicp_rows)) {
        if (count($el) == 3) {
            $multicp_rows[$el[1]][$el[2]] = $el[0];
        } else {
            $multicp_rows[$el[1]]["default"] = $el[0];
        }
    }
}

if ($pass2 < 2) {
    echo "/* {{{ Start of $name multi-stage table for codepoint -> entity */", "\n\n";
} else {
    echo "/* {{{ Start of $name table for codepoint -> entity */", "\n\n";
}

if (empty($multicp_rows)) {
    goto skip_multicp;
}

ksort($multicp_rows);
foreach ($multicp_rows as &$v) {
    ksort($v);
}
unset($v);

echo
"/* {{{ Start of double code point tables for $name */", "\n\n";

foreach ($multicp_rows as $k => $v) {
    echo "static const entity_multicodepoint_row multi_cp_{$ident}_",
    sprintf("%05s", $k), "[] = {", "\n";
    if (key_exists("default", $v)) {
        if ($v['default'] == 'GT') { /* hack to make > translate to &gt; not GT; */
            $v['default'] = "gt";
        }
        echo "\t{ {", sprintf("\"%-21s", $v["default"].'",'),
        "\t", sprintf("%02d", (count($v) - 1)), ",\t\t",
        sprintf("% 2d", strlen($v["default"])), '} },', "\n";
    } else {
        echo "\t{ {", sprintf("%-22s", 'NULL,'),
        "\t", sprintf("%02d", count($v)), ",\t\t0} },\n";
    }
    unset($v["default"]);
    foreach ($v as $l => $w) {
        echo "\t{ {", sprintf("\"%-21s", $w.'",'), "\t", sprintf("0x%05s", $l), ",\t",
        sprintf("% 2d", strlen($w)), '} },', "\n";
    }
    echo "};\n";
}
echo "\n/* End of double code point tables }}} */", "\n\n";

skip_multicp:

if ($pass2 < 2) {
    echo "/* {{{ Stage 3 Tables for $name */", "\n\n";
}

$t = <<<CODE
static const entity_stage3_row empty_stage3_table[] = {
	/* 64 elements */
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
	{0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } }, {0, { {NULL, 0} } },
};

CODE;

if (!$pass2) {
    echo $t;
}

$mstable = array();
foreach ($dp as $el) {
    $s1 = (hexdec($el[1]) & 0xFFF000) >> 12;
    $s2 = (hexdec($el[1]) & 0xFC0) >> 6;
    $s3 = hexdec($el[1]) & 0x3F;
    if (key_exists($el[1], $multicp_rows)) {
        $mstable[$s1][$s2][$s3] = "";
    } else {
        $mstable[$s1][$s2][$s3] = $el[0];
    }
}

for ($i = 0; $i < 0x1E; $i++) {
    for ($k = 0; $k < 64; $k++) {
        $any3 = false;
        $col3 = array();
        for ($l = 0; $l < 64; $l++) {
            if (isset($mstable[$i][$k][$l])) {
                $any3 = true;
                $col3[$l] = $mstable[$i][$k][$l];
            } else {
                $col3[$l] = null;
            }
        }
        if ($any3) {
            echo "static const entity_stage3_row stage3_table_{$ident}_",
            sprintf("%02X%03X", $i, $k << 6), "[] = {\n";
            foreach ($col3 as $y => $z) {
                if ($y == 0) {
                    echo "\t";
                } elseif ($y % 4 == 0) {
                    echo "\n\t";
                } else {
                    echo " ";
                }
                if ($z === null) {
                    echo "{0, { {NULL, 0} } },";
                } elseif ($z === "QUOT") { /* hack to translate " into &quote;, not &QUOT; */
                    echo "{0, { {\"quot\", 4} } },";
                } elseif ($z !== "") {
                    echo "{0, { {\"$z\", ", strlen($z), "} } },";
                } else {
                    echo "{1, { {(void *)", sprintf(
                        "multi_cp_{$ident}_%05X",
                        ($i << 12) | ($k << 6) | $y
                    ), ", 0} } },";
                }

            }
            echo "\n};\n\n";
        }
    }
}

if ($pass2 < 2) {
    echo "/* end of stage 3 Tables for $name }}} */", "\n\n";
}

if ($pass2 > 1) {
    goto hashtables;
}

echo
"/* {{{ Stage 2 Tables for $name */", "\n\n";

$t = <<<CODE
static const entity_stage2_row empty_stage2_table[] = {
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
	empty_stage3_table, empty_stage3_table, empty_stage3_table, empty_stage3_table,
};

CODE;

if (!$pass2) {
    echo $t;
}

for ($i = 0; $i < 0x1E; $i++) {
    $any = false;
    for ($k = 0; $k < 64; $k++) {
        if (isset($mstable[$i][$k])) {
            $any = true;
        }
    }
    if ($any) {
        echo "static const entity_stage2_row stage2_table_{$ident}_",
        sprintf("%02X000", $i), "[] = {\n";
        for ($k = 0; $k < 64; $k++) {
            if ($k == 0) {
                echo "\t";
            } elseif ($k % 4 == 0) {
                echo "\n\t";
            } else {
                echo " ";
            }
            if (isset($mstable[$i][$k])) {
                echo sprintf("stage3_table_{$ident}_%05X", ($i << 12) | ($k << 6)), ",";
            } else {
                echo "empty_stage3_table", ",";
            }
        }
        echo "\n};\n\n";
    }
}

echo
"/* end of stage 2 tables for $name }}} */", "\n\n";

echo "static const entity_stage1_row entity_ms_table_{$ident}[] = {\n";
for ($i = 0; $i < 0x1E; $i++) {
    if (isset($mstable[$i])) {
        echo "\t", sprintf("stage2_table_{$ident}_%02X000", $i), ",\n";
    } else {
        echo "\tempty_stage2_table,\n";
    }
}
echo "};\n\n";

echo
"/* end of $name multi-stage table for codepoint -> entity }}} */\n\n";

/* commented-out; this enabled binary search, which turned out to be
 * significantly slower than the hash tables for html 5 entities */
//echo
//"/* {{{ HTML 5 tables for entity -> codepoint */", "\n\n";

//$t = <<<CODE
//typedef struct {
//	const char *entity;
//	unsigned short entity_len;
//	unsigned int codepoint1;
//	unsigned int codepoint2;
//} entity_cp_map;
//
//#define ENTITY_CP_MAP_CMP(l, lsize, r, rsize) \
//	( ((lsize)==(rsize)) ? (memcmp((l), (r), (lsize))) : ((lsize)-(rsize)) )
//
//static const entity_cp_map html5_ent_cp_map[] = {
//
//CODE;
//echo $t;
//
//$dp = $origdp;
//usort($dp, function($a, $b) { $d = strlen($a[0])-strlen($b[0]);
//	return $d==0?strcmp($a[0], $b[0]):$d; });
//
//$k = 0;
//foreach ($dp as $o) {
//	if ($k == 0) echo "\t";
//	elseif ($k % 3 == 0) echo "\n\t";
//	else echo " ";
//	if (isset($o[2]))
//		echo sprintf('{"%s", %d, 0x%X, 0x%X},', $o[0], strlen($o[0]),
//			hexdec($o[1]), hexdec($o[2]));
//	else
//		echo sprintf('{"%s", %d, 0x%X, 0},', $o[0], strlen($o[0]),
//			hexdec($o[1]));
//
//	if (isset($o[2])) {
//		$entlen = strlen($o[0]) + 2;
//		$utf8len = strlen(
//			mb_convert_encoding("&#x{$o[1]};&#x{$o[2]};", "UTF-8", "HTML-ENTITIES"));
//		if ($utf8len > $entlen*1.2) {
//			die("violated assumption for traverse_for_entities");
//		}
//	}
//
//	$k++;
//}
//echo "\n};\n\n";
//
//echo "static const size_t html5_ent_cp_map_size = $k;\n\n";
//
//echo
//"/* end of HTML 5 tables for entity -> codepoint }}} */\n\n";

hashtables:

echo
"/* {{{ $name hash table for entity -> codepoint */", "\n\n";

$t = <<<CODE
typedef struct {
	const char *entity;
	unsigned short entity_len;
	unsigned int codepoint1;
	unsigned int codepoint2;
} entity_cp_map;

typedef const entity_cp_map *entity_ht_bucket;

typedef struct {
	unsigned num_elems; /* power of 2 */
	const entity_ht_bucket *buckets; /* .num_elems elements */
} entity_ht;

static const entity_cp_map ht_bucket_empty[] = { {NULL, 0, 0, 0} };

CODE;

if (!$pass2) {
    echo $t;
}

function hashfun($str)
{

    $hash = 5381;
    $nKeyLength = strlen($str);
    $pos = 0;

    for (; $nKeyLength > 0; $nKeyLength--) {
        $hash = (int)(((int)(((int)($hash << 5)) + $hash)) + ord($str[$pos++]))
                 & 0xFFFFFFFF;
    }
    return $hash;

}

$numelems = max(pow(2, ceil(log(1.5 * count($origdp)) / log(2))), 16);
$mask = $numelems - 1;
$hashes = array();
foreach ($origdp as $e) {
    $hashes[hashfun($e[0]) & $mask][] = $e;
    if (isset($e[2])) {
        $entlen = strlen($e[0]) + 2;
        $utf8len = strlen(
            mb_convert_encoding("&#x{$e[1]};&#x{$e[2]};", "UTF-8", "HTML-ENTITIES")
        );
        if ($utf8len > $entlen * 1.2) {
            die("violated assumption for traverse_for_entities");
        }
    }
}

for ($i = 0; $i < $numelems; $i++) {
    if (empty($hashes[$i])) {
        continue;
    }
    echo "static const entity_cp_map ht_bucket_{$ident}_", sprintf("%03X", $i) ,"[] = {";
    foreach ($hashes[$i] as $h) {
        if (isset($h[2])) {
            echo sprintf(
                ' {"%s", %d, 0x%05X, 0x%05X},',
                $h[0],
                strlen($h[0]),
                hexdec($h[1]),
                hexdec($h[2])
            );
        } else {
            echo sprintf(
                ' {"%s", %d, 0x%05X, 0},',
                $h[0],
                strlen($h[0]),
                hexdec($h[1])
            );
        }
    }
    echo " {NULL, 0, 0, 0} };\n";
}
echo "\n";

echo
"static const entity_cp_map *const ht_buckets_{$ident}[] = {\n";

for ($i = 0; $i < $numelems; $i++) {
    if ($i == 0) {
        echo "\t";
    } elseif ($i % 4 == 0) {
        echo "\n\t";
    } else {
        echo " ";
    }
    if (empty($hashes[$i])) {
        echo "ht_bucket_empty,";
    } else {
        echo "ht_bucket_{$ident}_", sprintf("%03X", $i), ",";
    }
}
echo "\n};\n\n";

echo
"static const entity_ht ent_ht_{$ident} = {
	", sprintf("0x%X", $numelems), ",
	ht_buckets_{$ident}
};\n\n";

echo
"/* end of $name hash table for entity -> codepoint }}} */\n\n";

if (!$pass2) {
    $data = file_get_contents("ents_html401.txt");
    $pass2 = 1;
    $name = "HTML 4.01";
    $ident = "html4";
    goto again;
} elseif ($pass2 == 1) {
    $data = file_get_contents("ents_basic.txt");
    $pass2 = 2;
    $name = "Basic entities (no apos)";
    $ident = "be_noapos";
    goto again;
} elseif ($pass2 == 2) {
    $data = file_get_contents("ents_basic_apos.txt");
    $pass2 = 3;
    $name = "Basic entities (with apos)";
    $ident = "be_apos";
    goto again;
}

echo "#endif /* HTML_TABLES_H */\n";
