USE [WeddingSCS]
GO

/****** Object:  Table [dbo].[T_Invites]    Script Date: 04/10/2018 12:42:23 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[T_Invites](
	[id] [int] NULL,
	[Code] [nvarchar](20) NOT NULL,
	[Nom] [nvarchar](25) NULL,
	[State] [nvarchar](1) NULL,
	[id_Table] [int] NULL,
	[Surnom] [nvarchar](20) NULL,
	[Etat] [bit] NULL,
 CONSTRAINT [PK_T_Invites] PRIMARY KEY CLUSTERED 
(
	[Code] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[T_Invites]  WITH CHECK ADD  CONSTRAINT [FK_T_Invites_T_Tables] FOREIGN KEY([id_Table])
REFERENCES [dbo].[T_Tables] ([id])
GO

ALTER TABLE [dbo].[T_Invites] CHECK CONSTRAINT [FK_T_Invites_T_Tables]
GO


