#!/usr/bin/env python3

import csv

data = list(csv.reader(open("pages/projects.csv", "r")))

text_replace = ""
for title, description, link_href in data:
    text_replace += ("    <tr><td>\n")
    text_replace += (f'    <a href="{link_href}">{title}</a><br>\n')
    text_replace += ('        <span style="font-style: italic; font-size: small;">\n')
    text_replace += ("            " + description + "\n")
    text_replace += ('        </span>\n')
    text_replace += ("    </td></tr>\n")


text_pub = open("pages/projects.html", "r").read()
index_start = text_pub.index("<!-- START_PUB_REPLACE -->")
index_end = text_pub.index("<!-- END_PUB_REPLACE -->")

text_pub = text_pub[:index_start+len("<!-- START_PUB_REPLACE -->")+1] + text_replace + text_pub[index_end:]
open("pages/projects.html", "w").write(text_pub)