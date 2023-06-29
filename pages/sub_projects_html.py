#!/usr/bin/env python3

import csv

data = list(csv.reader(open("pages/projects.csv", "r")))

text_replace = ""
for title, description, year, link_href in data:
    text_replace += f"""
    <tr>
        <td>
            <a href="{link_href}">{title}</a><br>
            <span style="font-style: italic; font-size: small;">{description}</span>
        </td>
        <td><a href='{link_href}'>{year}</a></td>
    </tr>"""


text_pub = open("pages/projects.html", "r").read()
index_start = text_pub.index("<!-- START_PUB_REPLACE -->")
index_end = text_pub.index("<!-- END_PUB_REPLACE -->")

text_replace = text_replace.lstrip("\n")

text_pub = text_pub[:index_start+len("<!-- START_PUB_REPLACE -->")+1] + text_replace + text_pub[index_end:]
open("pages/projects.html", "w").write(text_pub)