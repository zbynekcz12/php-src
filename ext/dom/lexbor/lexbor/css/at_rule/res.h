/*
 * Copyright (C) 2023 Alexander Borisov
 *
 * Author: Alexander Borisov <borisov@lexbor.com>
 */

/*
 * Caution!
 * This file generated by the script "utils/lexbor/css/names.py"!
 * Do not change this file!
 */


#ifndef LXB_CSS_AT_RULE_RES_H
#define LXB_CSS_AT_RULE_RES_H

#include "lexbor/core/shs.h"
#include "lexbor/css/at_rule/const.h"


static const lxb_css_entry_data_t lxb_css_at_rule_data[LXB_CSS_AT_RULE__LAST_ENTRY] = 
{
    {(lxb_char_t *) "#undef", 6, LXB_CSS_AT_RULE__UNDEF, lxb_css_at_rule_state__undef,
     lxb_css_at_rule__undef_create, lxb_css_at_rule__undef_destroy, lxb_css_at_rule__undef_serialize, (void *) (uintptr_t) LXB_CSS_AT_RULE__UNDEF},
    {(lxb_char_t *) "#сustom", 7, LXB_CSS_AT_RULE__CUSTOM, lxb_css_at_rule_state__custom,
     lxb_css_at_rule__custom_create, lxb_css_at_rule__custom_destroy, lxb_css_at_rule__custom_serialize, (void *) (uintptr_t) LXB_CSS_AT_RULE__CUSTOM},
    {(lxb_char_t *) "media", 5, LXB_CSS_AT_RULE_MEDIA, lxb_css_at_rule_state_media,
     lxb_css_at_rule_media_create, lxb_css_at_rule_media_destroy, lxb_css_at_rule_media_serialize,
     NULL},
    {(lxb_char_t *) "namespace", 9, LXB_CSS_AT_RULE_NAMESPACE, lxb_css_at_rule_state_namespace,
     lxb_css_at_rule_namespace_create, lxb_css_at_rule_namespace_destroy, lxb_css_at_rule_namespace_serialize,
     NULL}
};

static const lexbor_shs_entry_t lxb_css_at_rule_shs[6] = 
{
    {NULL, NULL, 5, 0}, 
    {NULL, NULL, 0, 0}, 
    {NULL, NULL, 0, 0}, 
    {"media", (void *) &lxb_css_at_rule_data[LXB_CSS_AT_RULE_MEDIA], 5, 0}, 
    {NULL, NULL, 0, 0}, 
    {"namespace", (void *) &lxb_css_at_rule_data[LXB_CSS_AT_RULE_NAMESPACE], 9, 0}
};


#endif /* LXB_CSS_AT_RULE_RES_H */
