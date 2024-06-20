from lxml import etree

schema_file = 'C:/My_Portfolio/xml/bloodbank.xsd'
schema = etree.XMLSchema(etree.parse(schema_file))
xml_file = 'C:/My_Portfolio/xml/bloodbank.xml'
xml_doc = etree.parse(xml_file)

if schema.validate(xml_doc):
    print("Validation successful.")
else:
    print("Validation failed. Errors:")
    for error in schema.error_log:
        print(error)
