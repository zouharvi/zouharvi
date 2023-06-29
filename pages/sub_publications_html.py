#!/usr/bin/env python3

import csv

data = list(csv.reader(open("pages/publications.csv", "r")))

text_replace = ""
for title, authors, link_name, link_href in data:
    text_replace += f"""
    <tr>
        <td>{title}<br>
            <span style="font-style: italic; font-size: small;">{authors.replace('Vilém Zouhar', '<u>Vilém Zouhar</u>')}</span>
        </td>
    """

    if link_href:
        text_replace += (f'    <td><a href="{link_href}">{link_name}</a></td>\n')
    else:
        text_replace += (f'    <td style="font-style: italic;">{link_name}</td>\n')
    text_replace += ("    </tr>")


text_pub = open("pages/publications.html", "r").read()
index_start = text_pub.index("<!-- START_PUB_REPLACE -->")
index_end = text_pub.index("<!-- END_PUB_REPLACE -->")

text_replace = text_replace.lstrip("\n")

text_pub = text_pub[:index_start+len("<!-- START_PUB_REPLACE -->")+1] + text_replace + text_pub[index_end:]
open("pages/publications.html", "w").write(text_pub)