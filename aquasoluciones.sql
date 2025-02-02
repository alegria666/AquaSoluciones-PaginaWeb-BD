PGDMP             
             |            aquasoluciones    15.1    15.1 )    =           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            >           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            @           1262    50697    aquasoluciones    DATABASE     �   CREATE DATABASE aquasoluciones WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE aquasoluciones;
                postgres    false            �            1259    50705    cliente    TABLE     �   CREATE TABLE public.cliente (
    cedula character varying(10) NOT NULL,
    nombre_completo character varying(50) NOT NULL,
    direccion character varying(50) NOT NULL,
    celular numeric(13,0) NOT NULL
);
    DROP TABLE public.cliente;
       public         heap    postgres    false            �            1259    50762    contrato_empleado    TABLE       CREATE TABLE public.contrato_empleado (
    id_contrato integer NOT NULL,
    cedula_empleado character varying(10) NOT NULL,
    tipo_contrato character varying(50) NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_fin date,
    sueldo numeric NOT NULL
);
 %   DROP TABLE public.contrato_empleado;
       public         heap    postgres    false            �            1259    50710    contrato_servicio    TABLE     �   CREATE TABLE public.contrato_servicio (
    id_servicio integer NOT NULL,
    cedula_cliente character varying NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_fin date,
    tipo_servicio character varying(50) NOT NULL
);
 %   DROP TABLE public.contrato_servicio;
       public         heap    postgres    false            �            1259    50698    empleado    TABLE       CREATE TABLE public.empleado (
    cedula character varying(10) NOT NULL,
    nombre character varying(50),
    apellido character varying(50) NOT NULL,
    celular numeric,
    email character varying(100) NOT NULL,
    cargo character varying(100) NOT NULL
);
    DROP TABLE public.empleado;
       public         heap    postgres    false            �            1259    50742    factura    TABLE     �   CREATE TABLE public.factura (
    id_fac integer NOT NULL,
    cedula_cliente character varying(10) NOT NULL,
    fecha_aviso date,
    fecha_vencimiento date NOT NULL,
    total numeric NOT NULL
);
    DROP TABLE public.factura;
       public         heap    postgres    false            �            1259    50732    lectura_medidor    TABLE     �   CREATE TABLE public.lectura_medidor (
    id_lectura integer NOT NULL,
    id_medidor integer NOT NULL,
    fecha date NOT NULL,
    lectura_actual integer NOT NULL,
    lectura_anterior integer
);
 #   DROP TABLE public.lectura_medidor;
       public         heap    postgres    false            �            1259    50722    medidor    TABLE     �   CREATE TABLE public.medidor (
    id_medidor integer NOT NULL,
    cedula_cliente character varying(10) NOT NULL,
    numero_serie character varying(50) NOT NULL
);
    DROP TABLE public.medidor;
       public         heap    postgres    false            �            1259    50784    noticias    TABLE     �   CREATE TABLE public.noticias (
    id_noticia integer NOT NULL,
    "t¡tulo" character varying(255),
    contenido character varying(1000),
    "fecha_publicaci¢n" date
);
    DROP TABLE public.noticias;
       public         heap    postgres    false            �            1259    50752    pagos    TABLE     �   CREATE TABLE public.pagos (
    id_pago integer NOT NULL,
    id_factura integer NOT NULL,
    fecha date NOT NULL,
    monto numeric NOT NULL
);
    DROP TABLE public.pagos;
       public         heap    postgres    false            �            1259    50772    reporte_servicio    TABLE     �   CREATE TABLE public.reporte_servicio (
    id_reporte integer NOT NULL,
    cedula_cliente character varying(10) NOT NULL,
    problema_reportado character varying(1000) NOT NULL,
    fecha_reporte date
);
 $   DROP TABLE public.reporte_servicio;
       public         heap    postgres    false            2          0    50705    cliente 
   TABLE DATA           N   COPY public.cliente (cedula, nombre_completo, direccion, celular) FROM stdin;
    public          postgres    false    215   �3       8          0    50762    contrato_empleado 
   TABLE DATA           y   COPY public.contrato_empleado (id_contrato, cedula_empleado, tipo_contrato, fecha_inicio, fecha_fin, sueldo) FROM stdin;
    public          postgres    false    221   �4       3          0    50710    contrato_servicio 
   TABLE DATA           p   COPY public.contrato_servicio (id_servicio, cedula_cliente, fecha_inicio, fecha_fin, tipo_servicio) FROM stdin;
    public          postgres    false    216   \5       1          0    50698    empleado 
   TABLE DATA           S   COPY public.empleado (cedula, nombre, apellido, celular, email, cargo) FROM stdin;
    public          postgres    false    214   H6       6          0    50742    factura 
   TABLE DATA           `   COPY public.factura (id_fac, cedula_cliente, fecha_aviso, fecha_vencimiento, total) FROM stdin;
    public          postgres    false    219   �7       5          0    50732    lectura_medidor 
   TABLE DATA           j   COPY public.lectura_medidor (id_lectura, id_medidor, fecha, lectura_actual, lectura_anterior) FROM stdin;
    public          postgres    false    218   8       4          0    50722    medidor 
   TABLE DATA           K   COPY public.medidor (id_medidor, cedula_cliente, numero_serie) FROM stdin;
    public          postgres    false    217   g8       :          0    50784    noticias 
   TABLE DATA           Z   COPY public.noticias (id_noticia, "t¡tulo", contenido, "fecha_publicaci¢n") FROM stdin;
    public          postgres    false    223   �8       7          0    50752    pagos 
   TABLE DATA           B   COPY public.pagos (id_pago, id_factura, fecha, monto) FROM stdin;
    public          postgres    false    220   n:       9          0    50772    reporte_servicio 
   TABLE DATA           i   COPY public.reporte_servicio (id_reporte, cedula_cliente, problema_reportado, fecha_reporte) FROM stdin;
    public          postgres    false    222   �:       �           2606    50704    empleado Empleado_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT "Empleado_pkey" PRIMARY KEY (cedula);
 B   ALTER TABLE ONLY public.empleado DROP CONSTRAINT "Empleado_pkey";
       public            postgres    false    214            �           2606    50709    cliente cliente_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (cedula);
 >   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_pkey;
       public            postgres    false    215            �           2606    50766 (   contrato_empleado contrato_empleado_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.contrato_empleado
    ADD CONSTRAINT contrato_empleado_pkey PRIMARY KEY (id_contrato);
 R   ALTER TABLE ONLY public.contrato_empleado DROP CONSTRAINT contrato_empleado_pkey;
       public            postgres    false    221            �           2606    50716 )   contrato_servicio contratos_servicio_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.contrato_servicio
    ADD CONSTRAINT contratos_servicio_pkey PRIMARY KEY (id_servicio);
 S   ALTER TABLE ONLY public.contrato_servicio DROP CONSTRAINT contratos_servicio_pkey;
       public            postgres    false    216            �           2606    50746    factura factura_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.factura
    ADD CONSTRAINT factura_pkey PRIMARY KEY (id_fac);
 >   ALTER TABLE ONLY public.factura DROP CONSTRAINT factura_pkey;
       public            postgres    false    219            �           2606    50736 $   lectura_medidor lectura_medidor_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.lectura_medidor
    ADD CONSTRAINT lectura_medidor_pkey PRIMARY KEY (id_lectura);
 N   ALTER TABLE ONLY public.lectura_medidor DROP CONSTRAINT lectura_medidor_pkey;
       public            postgres    false    218            �           2606    50726    medidor medidores_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.medidor
    ADD CONSTRAINT medidores_pkey PRIMARY KEY (id_medidor);
 @   ALTER TABLE ONLY public.medidor DROP CONSTRAINT medidores_pkey;
       public            postgres    false    217            �           2606    50790    noticias noticias_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.noticias
    ADD CONSTRAINT noticias_pkey PRIMARY KEY (id_noticia);
 @   ALTER TABLE ONLY public.noticias DROP CONSTRAINT noticias_pkey;
       public            postgres    false    223            �           2606    50756    pagos pagos_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY public.pagos
    ADD CONSTRAINT pagos_pkey PRIMARY KEY (id_pago);
 :   ALTER TABLE ONLY public.pagos DROP CONSTRAINT pagos_pkey;
       public            postgres    false    220            �           2606    50778 &   reporte_servicio reporte_servicio_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.reporte_servicio
    ADD CONSTRAINT reporte_servicio_pkey PRIMARY KEY (id_reporte);
 P   ALTER TABLE ONLY public.reporte_servicio DROP CONSTRAINT reporte_servicio_pkey;
       public            postgres    false    222            �           2606    50767 8   contrato_empleado contrato_empleado_cedula_empleado_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.contrato_empleado
    ADD CONSTRAINT contrato_empleado_cedula_empleado_fkey FOREIGN KEY (cedula_empleado) REFERENCES public.empleado(cedula);
 b   ALTER TABLE ONLY public.contrato_empleado DROP CONSTRAINT contrato_empleado_cedula_empleado_fkey;
       public          postgres    false    3209    221    214            �           2606    50717 0   contrato_servicio contratos_servicio_cedula_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.contrato_servicio
    ADD CONSTRAINT contratos_servicio_cedula_fkey FOREIGN KEY (cedula_cliente) REFERENCES public.cliente(cedula);
 Z   ALTER TABLE ONLY public.contrato_servicio DROP CONSTRAINT contratos_servicio_cedula_fkey;
       public          postgres    false    216    3211    215            �           2606    50747 #   factura factura_cedula_cliente_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.factura
    ADD CONSTRAINT factura_cedula_cliente_fkey FOREIGN KEY (cedula_cliente) REFERENCES public.cliente(cedula);
 M   ALTER TABLE ONLY public.factura DROP CONSTRAINT factura_cedula_cliente_fkey;
       public          postgres    false    3211    215    219            �           2606    50737 /   lectura_medidor lectura_medidor_id_medidor_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.lectura_medidor
    ADD CONSTRAINT lectura_medidor_id_medidor_fkey FOREIGN KEY (id_medidor) REFERENCES public.medidor(id_medidor);
 Y   ALTER TABLE ONLY public.lectura_medidor DROP CONSTRAINT lectura_medidor_id_medidor_fkey;
       public          postgres    false    218    217    3215            �           2606    50727 %   medidor medidores_cedula_cliente_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.medidor
    ADD CONSTRAINT medidores_cedula_cliente_fkey FOREIGN KEY (cedula_cliente) REFERENCES public.cliente(cedula);
 O   ALTER TABLE ONLY public.medidor DROP CONSTRAINT medidores_cedula_cliente_fkey;
       public          postgres    false    3211    215    217            �           2606    50757    pagos pagos_id_factura_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pagos
    ADD CONSTRAINT pagos_id_factura_fkey FOREIGN KEY (id_factura) REFERENCES public.factura(id_fac);
 E   ALTER TABLE ONLY public.pagos DROP CONSTRAINT pagos_id_factura_fkey;
       public          postgres    false    219    220    3219            �           2606    50779 5   reporte_servicio reporte_servicio_cedula_cliente_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.reporte_servicio
    ADD CONSTRAINT reporte_servicio_cedula_cliente_fkey FOREIGN KEY (cedula_cliente) REFERENCES public.cliente(cedula);
 _   ALTER TABLE ONLY public.reporte_servicio DROP CONSTRAINT reporte_servicio_cedula_cliente_fkey;
       public          postgres    false    3211    215    222            2   �   x�=��j�0��z���i�Y�FK��]�j� �EI��W�����d�u���: Ou�k�1����'aS�ad*�t�Iyc�뼖��]�ɨӊ�̢�+5���T��ŵ,��%J��1����۫� ��]�!�O8.��օ�������0�Lߵ4�rS�.t�U��$�O��{#o�Q��A�B%��]h^������g��~��M�      8   �   x���;1��9E. ��8�����AK��XEi�=�,��)��!DBd��9/E��K���ȸA��Qz���L�Ȏ��/����+��,F���~Ȱ�[�禾h���=O_o	��(�G�X~����4
K��)�)�%O[��IC�      3   �   x�5лn!��b�hfx�RZN��R�i�!f�}��ͬ�44�\@��DZcZئ]�*$�Q\�G�yݖy�i8��a���p+I 	�=4�1 ���4�K�[���S��'E>>ͷ���ʔH�O��:�B��կ�n�N�pI1�y��Z��8�SE=��qM�3��ѝ�\����mE+v�h�w7O�O,���vP8}%���(�B���,T�      1   A  x�U��N�0���S�	���nLcCCLBG.&�F�֩���xNl��G�Ipʄ�͊�ϟ%�<)R���Cn����H�R�"�T��Y���`����X�ɠ�q��l߁���(�Hq��[|��܁��	l��D�T���ͫm�xO�����1r3Bm�Z�T�=���A���@��������"%�5�g�\g��-�9�%�V�6�Y*/�#�Ί��������l0���BJ��"/|��\�,~����6��.�E��ĳ
��X����J���A�Ge�t<�cq��w�mנ{3޺a�5P˟p9��(���֚�      6   c   x�]α� D�v!�3�.���Eɍ��'�`")Rkk��B)��,�D�ב`�[�in-q[�5�}�p��Ƕ`ǿa�Ҏ�`��W������s~ �i'_      5   K   x�=���0�3����g��?G�* !K�# ��p�u�։����8��N���ݸ:�Y�(4p��T�	�&      4   k   x��;
�@E�ZZ��_�Ҙ@�Ō�)��ux��������ET���?b�DUE3���7�X�Z��x��S����`���\�+����
���<Ө� ����      :   |  x���Mn�@���)x#� �h6�4>@6�VX�����4is���l8@���$�����:�5�H��$*0bF��C2f� �FN\�,��P���j�Q
�JG,�d�8��3	e�} �!���ߩY�n�v]�6��s�f�e���"����R��LG}�Q�{�0\d�Ɉ�I�����V�"�7�۲���u˶sƴR��#���{��p���}`?����J�3�QRoL:*��-�g�m��K׺U�:�n�I*z���*U��p`Ѹa<2y2
���W?��g�Y�,*�@�A<K����(���&�I��_��=ݙ��@�c���ث3�g�kft=�d��3�����0�ƚ��?+���U#4���n�X�<�      7   P   x�5���0�7�Be��2L���u�~��E��I���Ʒ�7���&ס!�`(��͏�Z��P��Ŀڿ������      9     x�=�MN�0F��)r ���N��Xs 6nb��Ҥ��� N2'#�@%����}��l���5ZI�����q��w�9\w�y ��"���A`J�K/l/m7
���v�q/�u�B/�
�@Fߐ���i�]�q�HQ�A4�R*��1���4\��t�;�1��kM�?ӫC�0�t�d� �s�� �3���O}hJ>-�(P:���l�&Q/SU��͞�� �6^ ~�İ��a,遇�5���9���=�v�J�����_�Oo�     