#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_state TEXT DEFAULT NULL,
	l10n_diffsource mediumtext,

	KEY sys_language_uid_l10n_parent (sys_language_uid,l10n_parent)
);
